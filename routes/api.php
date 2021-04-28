<?php

use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'v1'],
    function () {
        Route::group(
            ['prefix' => 'spa'],
            function () {
                Route::post('/login', App\Http\Controllers\Api\V1\Auth\Spa\LoginController::class);
                Route::post('/register', App\Http\Controllers\Api\V1\Auth\Spa\RegisterController::class);

                Route::group(
                    ['middleware' => ['auth:sanctum']],
                    function () {
                        Route::get('/user', App\Http\Controllers\Api\V1\Auth\Spa\UserController::class);
                        Route::post('/logout', App\Http\Controllers\Api\V1\Auth\Spa\LogoutController::class);
                    }
                );
            }
        );

        Route::group(
            ['prefix' => 'token'],
            function () {
                Route::post('/login', App\Http\Controllers\Api\V1\Auth\Token\LoginController::class);
                Route::post('/register', App\Http\Controllers\Api\V1\Auth\Token\RegisterController::class);

                Route::group(
                    ['middleware' => ['auth:sanctum']],
                    function () {
                        Route::get('/user', App\Http\Controllers\Api\V1\Auth\Token\UserController::class);
                        Route::post('/logout', App\Http\Controllers\Api\V1\Auth\Token\LogoutController::class);
                        Route::post('/revoke', App\Http\Controllers\Api\V1\Auth\Token\RevokeController::class);
                    }
                );
            }
        );

        Route::group(
            ['middleware' => ['auth:sanctum']],
            function () {
                Route::apiResource('users', App\Http\Controllers\Api\V1\Admin\UserApiController::class);
                Route::apiResource('roles', App\Http\Controllers\Api\V1\Admin\RoleApiController::class);
                Route::apiResource('permissions', App\Http\Controllers\Api\V1\Admin\PermissionApiController::class);
            }
        );
    }
);
