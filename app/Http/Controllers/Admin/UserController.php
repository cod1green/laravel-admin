<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('user-read'), Response::HTTP_FORBIDDEN);
        return view('admin.user.index');
    }

    public function create()
    {
        abort_if(Gate::denies('user-create'), Response::HTTP_FORBIDDEN);
        return view('admin.user.create');
    }

    public function edit(User $user)
    {
        abort_if(Gate::denies('user-update'), Response::HTTP_FORBIDDEN);
        return view('admin.user.edit', compact('user'));
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user-read'), Response::HTTP_FORBIDDEN);
        $user->load('roles');
        $user->load('permissions');
        return view('admin.user.show', compact('user'));
    }
}
