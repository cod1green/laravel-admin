<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPermissionRequest;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PermissionController extends Controller
{
    private $notRemoved = [
        'role_create',
        'role_read',
        'role_update',
        'role_delete',
        'permission_create',
        'permission_read',
        'permission_update',
        'permission_delete',
        'user_create',
        'user_read',
        'user_update',
        'user_delete',
        'debug',
        'command',
    ];

    public function index()
    {
        abort_if(Gate::denies('permission_read'), Response::HTTP_FORBIDDEN);

        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        abort_if(Gate::denies('permission_create'), Response::HTTP_FORBIDDEN);

        $roles = Role::get();
        return view('admin.permissions.create', compact('roles'));
    }

    public function store(StorePermissionRequest $request)
    {
        $permission = Permission::create($request->except('roles'));

        $permission->syncRoles($request->input('roles', []));

        return redirect()->route('admin.permissions.index')
            ->with('success', "Permissão {$permission->name} adicionado com sucesso.");
    }

    public function show(Permission $permission)
    {
        abort_if(Gate::denies('permission_read'), Response::HTTP_FORBIDDEN);
        return view('admin.permissions.show', compact('permission'));
    }

    public function edit(Permission $permission)
    {
        abort_if(Gate::denies('permission_update'), Response::HTTP_FORBIDDEN);

        $permission->load('roles');

        $roles = Role::all();

        return view('admin.permissions.edit', compact('permission', 'roles'));
    }

    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $permission->update($request->except('roles'));
        $permission->syncRoles($request->input('roles', []));

        return redirect()->route('admin.permissions.index')
            ->with('success', "Permissão {$permission->name} editado com sucesso.");
    }

    public function destroy(Permission $permission)
    {
        abort_if(Gate::denies('permission_delete'), Response::HTTP_FORBIDDEN);

        if (in_array($permission->name, $this->notRemoved)) {
            return redirect()->route('admin.permissions.index')
                ->with('warning', 'Não é possível excluir esta permissão!');
        }

        $permission->delete();

        return redirect()->route('admin.permissions.index')
            ->with('success', "Permissão {$permission->name} excluido com sucesso");
    }

    public function massDestroy(MassDestroyPermissionRequest $request)
    {
        $permissions = Permission::whereIn('id', $request->input('ids'))->get();

        foreach ($permissions as $permission) {
            // Tornar impossível excluir estas permissões
            if (in_array($permission->name, $this->notRemoved)) {
                continue;
            }

            $permission->delete();
        }

        return redirect()->route('admin.permissions.index')
            ->with('success', 'Permissões excluídas com sucesso.');
    }
}
