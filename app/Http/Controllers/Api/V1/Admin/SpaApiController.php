<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class SpaApiController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            // return response()->json(Auth::user(), 200);

            return response(Auth::user(), Response::HTTP_OK);
        }

        throw ValidationException::withMessages([
            'email' => ['As credenciais fornecidas estão incorretas.']
        ]);
    }

    public function user()
    {
        return response(Auth::user(), Response::HTTP_OK);
    }

    public function logout()
    {
        Auth::logout();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
