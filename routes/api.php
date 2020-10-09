<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::post('/register', [App\Http\Controllers\Api\V1\Admin\RegisterApiController::class, 'register']);
    
    Route::post('/spa/login', [App\Http\Controllers\Api\V1\Admin\SpaApiController::class, 'login']);
    Route::post('/token/login', [App\Http\Controllers\Api\V1\Admin\TokenApiController::class, 'login']);
    
    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::apiResource('users', App\Http\Controllers\Api\V1\Admin\UserApiController::class);
        Route::apiResource('roles', App\Http\Controllers\Api\V1\Admin\RoleApiController::class);
        Route::apiResource('permissions', App\Http\Controllers\Api\V1\Admin\PermissionApiController::class);

        Route::get('/spa/user', [App\Http\Controllers\Api\V1\Admin\SpaApiController::class, 'user']);
        Route::post('/spa/logout', [App\Http\Controllers\Api\V1\Admin\SpaApiController::class, 'logout']);

        Route::get('/token/user', [App\Http\Controllers\Api\V1\Admin\TokenApiController::class, 'user']);
        Route::post('/token/logout', [App\Http\Controllers\Api\V1\Admin\TokenApiController::class, 'logout']);
        Route::post('/token/revoke-all', [App\Http\Controllers\Api\V1\Admin\TokenApiController::class, 'revokeAll']);
    });
});
