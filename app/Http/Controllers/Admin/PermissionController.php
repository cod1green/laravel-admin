<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PermissionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('permission-read'), Response::HTTP_FORBIDDEN);
        return view('admin.permission.index');
    }

    public function create()
    {
        abort_if(Gate::denies('permission-create'), Response::HTTP_FORBIDDEN);
        return view('admin.permission.create');
    }

    public function edit(Permission $permission)
    {
        abort_if(Gate::denies('permission-update'), Response::HTTP_FORBIDDEN);
        return view('admin.permission.edit', compact('permission'));
    }

    public function show(Permission $permission)
    {
        abort_if(Gate::denies('permission-read'), Response::HTTP_FORBIDDEN);
        return view('admin.permission.show', compact('permission'));
    }
}
