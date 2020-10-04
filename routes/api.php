<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:api'], 'prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin'], function () {
    Route::apiResource('users', App\Http\Controllers\Api\V1\Admin\UserController::class);
    Route::apiResource('roles', App\Http\Controllers\Api\V1\Admin\RoleController::class);
    Route::apiResource('permissions', App\Http\Controllers\Api\V1\Admin\PermissionController::class);
});