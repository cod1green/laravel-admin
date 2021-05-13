<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\Admin\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('user_read'), Response::HTTP_FORBIDDEN);
        return new UserResource(User::with(['roles', 'permissions'])->get());
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->except(['roles', 'permissions']));
        $user->syncRoles($request->input('roles', []));
        $user->syncPermissions($request->input('permissions', []));

        return (new UserResource($user))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user_read'), Response::HTTP_FORBIDDEN);
        return new UserResource($user->load(['roles', 'permissions']));
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

        return (new UserResource($user))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN);
        $user->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
