<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\MassDestroyPermissionRequest;

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

    public function index()
    {
        abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN);

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
        abort_if(Gate::denies('permission_show'), Response::HTTP_FORBIDDEN);
        return view('admin.permissions.show', compact('permission'));
    }

    public function edit(Permission $permission)
    {
        abort_if(Gate::denies('permission_edit'), Response::HTTP_FORBIDDEN);

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
     * Excluir todas as permissões selecionadas de uma vez.
     *
     * @param Request $request
     */
    public function massDestroy(MassDestroyPermissionRequest $request)
    {
        // Permission::whereIn('id', request('ids'))->delete();

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
