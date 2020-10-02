<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    private $totalPage = 30;

    public function __construct()
    {
        // $this->middleware(['permission:user_access']);
    }

    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN);

        $users = User::all();
        // $users = User::paginate($this->totalPage);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN);

        $roles = Role::get();
        $permissions = Permission::all();

        return view('admin.users.create', compact('roles', 'permissions'));
    }

    public function store(Request $request)
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN);

        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>"required|email|unique:users,email,id",
            'password'=>'required|min:6|confirmed'
        ]);

        $user = User::create($request->except(['roles', 'permissions']));
        if ($user) {
            $roles = $request->input('roles') ? $request->input('roles') : [];
            $user->syncRoles($roles);

            $permissions = $request->input('permissions') ? $request->input('permissions') : [];
            $user->syncPermissions($permissions);

            return redirect()
                    ->route('admin.users.index')
                    ->with('success', "Usuário {$user->name} cadastrado com sucesso.");
        }

        return redirect()
            ->back()
            ->with('error', "Erro ao cadastrar o Usuário {$user->name}.");
    }

    public function show($id)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN);
        return redirect('users');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN);

        $user = User::findOrFail($id);
        $roles = Role::get();
        $permissions = Permission::all();

        return view('admin.users.edit', compact('user', 'roles', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN);

        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>"required|email|unique:users,email,{$id},id",
            'password'=>'nullable|min:6|confirmed'
        ]);

        // para não alterar a senha se estiver vazia
        if (is_null($request['password'])) {
            unset($request['password']);
        }

        $user = User::findOrFail($id);

        $update = $user->update($request->except(['roles', 'permissions']));
        if ($update) {
            $roles = $request->input('roles') ? $request->input('roles') : [];
            $user->syncRoles($roles);

            $permissions = $request->input('permissions') ? $request->input('permissions') : [];
            $user->syncPermissions($permissions);

            return redirect()
                    ->route('admin.users.index')
                    ->with('success', "Usuário {$user->name} editado com sucesso.");
        }

        return redirect()
                ->back()
                ->with('error', "Erro ao editar o Usuário {$user->name}.");
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN);

        $user = User::findOrFail($id);
        $delete = $user->delete();
        if ($delete) {
            return redirect()->route('admin.users.index')
                ->with('success', "Usuário {$user->name} excluído com sucesso.");
        }

        return redirect()
            ->back()
            ->with('error', "Erro ao excluir o Usuário {$user->name}.");
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN);
        
        if ($request->input('ids')) {
            $users = User::whereIn('id', $request->input('ids'))->get();

            foreach ($users as $user) {
                $user->delete();
            }

            return redirect()->route('admin.users.index')
                ->with('success', 'Usuários excluídos com sucesso.');
        }
    }
}
