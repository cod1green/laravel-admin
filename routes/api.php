<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function(Request $request){
    return $request->user();
});

Route::post('/register', [App\Http\Controllers\Api\V1\Admin\RegisterApiController::class, 'register']);
Route::post('/login', [App\Http\Controllers\Api\V1\Admin\LoginApiController::class, 'login']);
Route::post('/token', [App\Http\Controllers\Api\V1\Admin\LoginApiController::class, 'token']);
Route::post('/logout', [App\Http\Controllers\Api\V1\Admin\LoginApiController::class, 'logout']);
Route::post('/token-delete', [App\Http\Controllers\Api\V1\Admin\LoginApiController::class, 'tokenDelete'])
    ->middleware('auth:sanctum');

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => 'v1', 'as' => 'api.'], function () {
    Route::apiResource('users', App\Http\Controllers\Api\V1\Admin\UserApiController::class);
    Route::apiResource('roles', App\Http\Controllers\Api\V1\Admin\RoleApiController::class);
    Route::apiResource('permissions', App\Http\Controllers\Api\V1\Admin\PermissionApiController::class);
});