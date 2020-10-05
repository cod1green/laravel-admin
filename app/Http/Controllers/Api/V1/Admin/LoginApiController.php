<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginApiController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return response()->json(Auth::user(), 200);
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.']
        ]);
    }

    public function token(Request $request)
    {
        $request->validate([
            'email'         => 'required|email',
            'password'      => 'required',
            'device_name'   => 'required',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if (! $user || ! Hash::check($request->password, $user->password)) {
            // return response([
            //     'email' => ['The provided credentials are incorrect.'],
            // ], 404);

            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.']
            ]);
        }
    
        $token = $user->createToken($request->device_name)->plainTextToken;
    
        $reponse = [
            'user' => $user, 
            'token' => $token,
        ];
    
        return response($reponse, 201);
    }

    public function tokenDelete(Request $request)
    {
        $request->use()->tokens()->delete();
        return response()->json('logout', 201);
    }

    public function logout()
    {
        Auth::logout();
    }
}
