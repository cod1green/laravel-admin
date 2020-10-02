<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpFoundation\Response;

class PermissionController extends Controller
{
    private $permissions_not_removed = [
        'role_create',
        'role_edit',
        'role_show',
        'role_delete',
        'role_access',
        'permission_create',
        'permission_edit',
        'permission_show',
        'permission_delete',
        'permission_access',
        'user_create',
        'user_edit',
        'user_show',
        'user_delete',
        'user_access',
        'debug_access',
    ];

    public function __construct()
    {
        // $this->middleware(['permission:permission_access']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN);

        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('permission_create'), Response::HTTP_FORBIDDEN);

        $roles = Role::get();
        return view('admin.permissions.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('permission_create'), Response::HTTP_FORBIDDEN);

        $this->validate($request, [
            'name'=>"required|max:40|unique:permissions,name,id",
        ]);

        $permission = Permission::create($request->except('roles'));

        $roles = $request->input('roles') ? $request->input('roles') : [];
        $permission->syncRoles($roles);

        return redirect()->route('admin.permissions.index')
            ->with('success', "Permissão {$permission->name} adicionado com sucesso.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('permission_show'), Response::HTTP_FORBIDDEN);
        return redirect('permissions');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // abort_if(Gate::denies('permission_edit'), Response::HTTP_FORBIDDEN);
        abort_if(Gate::denies('permission_edit'), Response::HTTP_FORBIDDEN);

        $permission = Permission::findOrFail($id);
        $roles = Role::all();

        return view('admin.permissions.edit', compact('permission', 'roles'));
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
        abort_if(Gate::denies('permission_edit'), Response::HTTP_FORBIDDEN);

        $this->validate($request, [
            'name'=>"required|max:40|unique:permissions,name,{$id},id",
        ]);

        $permission = Permission::findOrFail($id);
        $permission->update($request->except('roles'));

        $roles = $request->input('roles') ? $request->input('roles') : [];
        $permission->syncRoles($roles);

        return redirect()->route('admin.permissions.index')
            ->with('success', "Permissão {$permission->name} editado com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('permission_delete'), Response::HTTP_FORBIDDEN);

        $permission = Permission::findOrFail($id);

        // Tornar impossível excluir estas permissões
        if (in_array($permission->name, $this->permissions_not_removed)) {
            return redirect()->route('admin.permissions.index')
            ->with('warning', 'Não é possível excluir esta permissão!');
        }
        
        $permission->delete();

        return redirect()->route('admin.permissions.index')
            ->with('success', "Permissão {$permission->name} excluido com sucesso");
    }

    /**
     * Delete all selected Permission at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        abort_if(Gate::denies('permission_delete'), Response::HTTP_FORBIDDEN);

        // Permission::whereIn('id', request('ids'))->delete();

        if ($request->input('ids')) {
            $permissions = Permission::whereIn('id', $request->input('ids'))->get();

            foreach ($permissions as $permission) {
                // Tornar impossível excluir estas permissões
                if (in_array($permission->name, $this->permissions_not_removed)) {
                    continue;
                }

                $permission->delete();
            }

            return redirect()->route('admin.permissions.index')
            ->with('success', 'Permissões excluídas com sucesso.');
        }
    }
}
