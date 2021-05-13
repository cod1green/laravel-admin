<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Http\Resources\Admin\PermissionResource;
use App\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PermissionController extends Controller
{
    private $notRemoved = [
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
        'debug',
        'command',
    ];

    public function index()
    {
        abort_if(Gate::denies('permission_read'), Response::HTTP_FORBIDDEN);
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
        abort_if(Gate::denies('permission_read'), Response::HTTP_FORBIDDEN);
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
        if (in_array($permission->name, $this->notRemoved)) {
            // 'Não é possível excluir esta permissão!'
        }

        $permission->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
