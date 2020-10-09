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
            $data = Auth::user();
            return response()->json(compact('data'))->setStatusCode(Response::HTTP_OK);
        }

        throw ValidationException::withMessages([
            'email' => ['As credenciais fornecidas estão incorretas.']
        ]);
    }

    public function user()
    {
        $data = Auth::user();
        return response()->json(compact('data'))->setStatusCode(Response::HTTP_OK);
    }

    public function logout()
    {
        Auth::logout();
        return response()->noContent();
    }
}
