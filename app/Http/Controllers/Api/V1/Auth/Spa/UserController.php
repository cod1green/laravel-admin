<?php

namespace App\Http\Controllers\Api\V1\Auth\Spa;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function __invoke(): Response
    {
        $data = Auth::user();
        return response()->json(compact('data'))->setStatusCode(Response::HTTP_OK);
    }
}
