<?php

namespace App\Http\Controllers\Api\V1\Auth\Token;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages(
                [
                    'email' => ['As credenciais fornecidas estão incorretas.']
                ]
            );
        }

        $data = [
            'user' => $user,
            'access_token' => $user->createToken('myapptoken')->plainTextToken,
            'token_type' => 'Bearer',
            'expires_in' => config('sanctum.expiration') ? config('sanctum.expiration') * 60 : null
        ];

        return response()->json(compact('data'))->setStatusCode(Response::HTTP_CREATED);
    }
}
