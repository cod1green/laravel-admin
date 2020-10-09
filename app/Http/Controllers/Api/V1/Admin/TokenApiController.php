<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Sanctum\NewAccessToken;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class TokenApiController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email'         => 'required|email',
            'password'      => 'required',
            'device_name'   => 'required',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['As credenciais fornecidas estão incorretas.']
            ]);
        }
        
        $data = [
            // 'user' => $user,
            'access_token' => $user->createToken($request->device_name)->plainTextToken,
            'token_type' => 'bearer',
            'expires_in' => config('sanctum.expiration') ? config('sanctum.expiration') * 60 : null
        ];

        return response()->json(compact('data'))->setStatusCode(Response::HTTP_CREATED);
    }

    public function user(Request $request)
    {   
        $data = [
            // 'user' => $request->user(),
            'access_token' => $request->bearerToken(),
            'token_type' => 'bearer',
            'expires_in' => config('sanctum.expiration') ? config('sanctum.expiration') * 60 : null 
        ];
        return response()->json(compact('data'))->setStatusCode(Response::HTTP_OK);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->noContent();
    }

    public function revokeAll(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->noContent();
    }
}
