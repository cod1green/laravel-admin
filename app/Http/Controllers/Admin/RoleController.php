<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRoleRequest;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('role_read'), Response::HTTP_FORBIDDEN);

        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        abort_if(Gate::denies('role_create'), Response::HTTP_FORBIDDEN);

        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    public function store(StoreRoleRequest $request)
    {
        $role = Role::create($request->except('permissions'));
        $role->syncPermissions($request->input('permissions', []));

        return redirect()->route('admin.roles.index')
            ->with('success', "Função {$role->name} adicionado com sucesso.");
    }

    public function show(Role $role)
    {
        abort_if(Gate::denies('role_read'), Response::HTTP_FORBIDDEN);

        $role->load('permissions');

        return view('admin.roles.show', compact('role'));
    }

    public function edit(Role $role)
    {
        abort_if(Gate::denies('role_update'), Response::HTTP_FORBIDDEN);

        $role->load('permissions');

        $permissions = Permission::all();

        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update($request->except('permissions'));
        $role->syncPermissions($request->input('permissions', []));

        return redirect()->route('admin.roles.index')
            ->with('success', "Função $role->name editado com sucesso.");
    }

    public function destroy(Role $role)
    {
        abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN);

        // Torna impossível excluir este papel específico admin
        if ($role->id == 1) {
            return redirect()->route('admin.roles.index')
                ->with('warning', "Não é possível excluir a função {$role->name}.");
        }

        $role->delete();

        return redirect()->route('admin.roles.index')
            ->with('success', "Função {$role->name} excluída com sucesso.");
    }

    public function massDestroy(MassDestroyRoleRequest $request)
    {
        abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN);

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
