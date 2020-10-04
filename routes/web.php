<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth'], 'prefix' => config('admin.prefix'), 'as' => 'admin.'], function () {
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
    Route::resource('roles', App\Http\Controllers\Admin\RoleController::class);
    Route::resource('permissions', App\Http\Controllers\Admin\PermissionController::class);

    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])
        ->name('home');
    Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index']);

    Route::get('/config-optimize-cache', [App\Http\Controllers\Admin\ConfigController::class, 'optimize'])
        ->name('config.optimize.cache');
    Route::get('/config-optimize-clear', [App\Http\Controllers\Admin\ConfigController::class, 'optimizeClear'])
        ->name('config.optimize.clear');

    Route::get('/config-route-cache', [App\Http\Controllers\Admin\ConfigController::class, 'route'])
        ->name('config.route.cache');
    Route::get('/config-route-clear', [App\Http\Controllers\Admin\ConfigController::class, 'routeClear'])
        ->name('config.route.clear');

    Route::get('/config-view-cache', [App\Http\Controllers\Admin\ConfigController::class, 'view'])
        ->name('config.view.cache');
    Route::get('/config-view-clear', [App\Http\Controllers\Admin\ConfigController::class, 'viewClear'])
        ->name('config.view.clear');

    Route::get('/config-config-cache', [App\Http\Controllers\Admin\ConfigController::class, 'config'])
        ->name('config.config.cache');
    Route::get('/config-config-clear', [App\Http\Controllers\Admin\ConfigController::class, 'configClear'])
        ->name('config.config.clear');

    Route::get('/config-cache-clear', [App\Http\Controllers\Admin\ConfigController::class, 'cacheClear'])
        ->name('config.cache.clear');
});

// perfil do usuario
Route::get('profile', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('profile.edit');
Route::post('profile', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');

// fotos do perfil
Route::put('foto-update/{id}', [App\Http\Controllers\Admin\ProfileController::class,'updateFoto'])->name('profile.foto-update');
Route::delete('foto-destroy/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'destroyFoto'])->name('profile.foto-destroy');

// home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();
// Auth::routes(['register' => false]);
