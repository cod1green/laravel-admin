<?php

namespace App\Http\Controllers\Api\V1\Auth\Spa;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LogoutController extends Controller
{
    public function __invoke(): Response
    {
        Auth::logout();
        return response()->noContent();
    }
}
