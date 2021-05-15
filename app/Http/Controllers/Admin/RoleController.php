<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('role-read'), Response::HTTP_FORBIDDEN);
        return view('admin.role.index');
    }

    public function create()
    {
        abort_if(Gate::denies('role-create'), Response::HTTP_FORBIDDEN);
        return view('admin.role.create');
    }

    public function edit(Role $role)
    {
        abort_if(Gate::denies('role-update'), Response::HTTP_FORBIDDEN);
        return view('admin.role.edit', compact('role'));
    }


    public function show(Role $role)
    {
        abort_if(Gate::denies('role-read'), Response::HTTP_FORBIDDEN);
        $role->load('permissions');
        return view('admin.role.show', compact('role'));
    }
}
