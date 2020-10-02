<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['permission:role_access']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // abort_if(Gate::denies('role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        abort_if(Gate::denies('role_access'), Response::HTTP_FORBIDDEN);
        
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('role_create'), Response::HTTP_FORBIDDEN);

        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('role_create'), Response::HTTP_FORBIDDEN);

        $this->validate($request, [
            'name' => 'required|max:40|unique:roles,name,id'
        ]);

        $role = Role::create($request->except('permissions'));
        if ($role) {
            $permissions = $request->input('permissions') ? $request->input('permissions') : [];
            $role->syncPermissions($permissions);

            return redirect()->route('admin.roles.index')
                ->with('success', "Função {$role->name} adicionado com sucesso.");
        }

        return redirect()
            ->back()
            ->with('error', "Erro ao cadastrar a Função {$role->name}.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('role_show'), Response::HTTP_FORBIDDEN);
        return redirect('roles');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort_if(Gate::denies('role_edit'), Response::HTTP_FORBIDDEN);

        $role = Role::findOrFail($id);
        $permissions = Permission::all();

        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        abort_if(Gate::denies('role_edit'), Response::HTTP_FORBIDDEN);
        
        $this->validate($request, [
            'name' => "required|max:40|unique:roles,name,{$id},id",
        ]);

        $role = Role::findOrFail($id);
        $role->update($request->except('permissions'));

        $permissions = $request->input('permissions') ? $request->input('permissions') : [];
        $role->syncPermissions($permissions);

        return redirect()->route('admin.roles.index')
            ->with('success', "Função $role->name editado com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN);

        $role = Role::findOrFail($id);

        // Torna impossível excluir este papel específico admin
        if ($role->id == 1) {
            return redirect()->route('admin.roles.index')
            ->with('warning', "Não é possível excluir a função {$role->name}.");
        }

        $role->delete();

        return redirect()->route('admin.roles.index')
            ->with('success', "Função {$role->name} excluída com sucesso.");
    }

    /**
     * Delete all selected Role at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN);

        // Role::whereIn('id', request('ids'))->delete();

        if ($request->input('ids')) {
            $roles = Role::whereIn('id', $request->input('ids'))->get();

            foreach ($roles as $role) {
                // Torna impossível excluir este papel específico admin
                if ($role->id != 1) {
                    $role->delete();
                }
            }

            return redirect()->route('admin.roles.index')
                ->with('success', 'Funções excluídas com sucesso.');
        }
    }
}
