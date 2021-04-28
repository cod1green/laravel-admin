<?php

namespace App\Http\Controllers\Api\V1\Auth\Token;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $data = [
            'user' => $request->user(),
            'access_token' => $request->bearerToken(),
            'token_type' => 'Bearer',
            'expires_in' => config('sanctum.expiration') ? config('sanctum.expiration') * 60 : null
        ];
        return response()->json(compact('data'))->setStatusCode(Response::HTTP_OK);
    }
}
