<?php

namespace App\Http\Controllers\Api\V1\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Admin\PermissionResource;

class PermissionApiController extends Controller
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
        return new PermissionResource(Permission::all());
    }

    public function store(StorePermissionRequest $request)
    {
        $permission = Permission::create($request->except('roles'));
        $permission->syncRoles($request->input('roles', []));

        return (new PermissionResource($permission))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Permission $permission)
    {
        abort_if(Gate::denies('permission_show'), Response::HTTP_FORBIDDEN);
        return new PermissionResource($permission);
    }

    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $permission->update($request->except('roles'));
        $permission->syncRoles($request->input('roles', []));

        return (new PermissionResource($permission))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Permission $permission)
    {
        abort_if(Gate::denies('permission_delete'), Response::HTTP_FORBIDDEN);

        // Tornar impossível excluir estas permissões
        if (in_array($permission->name, $this->permissions_not_removed)) {
            // 'Não é possível excluir esta permissão!'
        }

        $permission->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
