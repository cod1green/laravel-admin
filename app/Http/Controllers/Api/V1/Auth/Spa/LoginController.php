<?php

namespace App\Http\Controllers\Api\V1\Auth\Spa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required', 'string'],
            ]
        );

        if (Auth::attempt($request->only('email', 'password'))) {
            $data = Auth::user();
            return response()->json(compact('data'))->setStatusCode(Response::HTTP_OK);
        }

        throw ValidationException::withMessages(
            [
                'email' => ['As credenciais fornecidas estão incorretas.']
            ]
        );
    }
}
