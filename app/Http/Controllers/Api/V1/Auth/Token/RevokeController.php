<?php

namespace App\Http\Controllers\Api\V1\Auth\Token;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RevokeController extends Controller
{
    public function __invoke(Request $request): Response
    {
        $request->user()->tokens()->delete();
        return response()->noContent();
    }
}
