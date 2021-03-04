<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\MassDestroyUserRequest;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN);

        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN);

        $roles = Role::get();
        $permissions = Permission::all();

        return view('admin.users.create', compact('roles', 'permissions'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->except(['roles', 'permissions']));
        $user->syncRoles($request->input('roles', []));
        $user->syncPermissions($request->input('permissions', []));

        return redirect()
                ->route('admin.users.index')
                ->with('success', "Usuário {$user->name} cadastrado com sucesso.");
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN);

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN);

        $user->load('roles');
        $user->load('permissions');

        $roles = Role::get();
        $permissions = Permission::all();

        return view('admin.users.edit', compact('user', 'roles', 'permissions'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        // para não alterar a senha se estiver vazia
        if (is_null($request['password'])) {
            unset($request['password']);
        }

        $user->update($request->except(['roles', 'permissions']));
        $user->syncRoles($request->input('roles', []));
        $user->syncPermissions($request->input('permissions', []));

        return redirect()
            ->route('admin.users.index')
            ->with('success', "Usuário {$user->name} editado com sucesso.");
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN);

        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('success', "Usuário {$user->name} excluído com sucesso.");
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(MassDestroyUserRequest $request)
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
