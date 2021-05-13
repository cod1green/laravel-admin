<?php

use App\Http\Controllers\Admin\CommandController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', App\Http\Controllers\HomeController::class)->name('home');
Route::redirect('/home', '/');

Auth::routes(['register' => true, 'verify' => true]);

Route::middleware(['verified'])->group(
    function () {
        Route::group(
            ['middleware' => ['auth'], 'prefix' => config('admin.prefix'), 'as' => 'admin.'],
            function () {
                Route::get('/', DashboardController::class)->name('dashboard');

                Route::resource('users', UserController::class);
                Route::resource('roles', RoleController::class);
                Route::resource('permissions', PermissionController::class);

                Route::get('/optimize-cache', [CommandController::class, 'optimize'])->name('optimize.cache');
                Route::get('/optimize-clear', [CommandController::class, 'optimizeClear'])
                    ->name('optimize.clear');
            }
        );

        Route::group(
            ['middleware' => ['auth']],
            function () {
                Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
                Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

                Route::put('foto-update/{id}', [ProfileController::class, 'updateFoto'])
                    ->name('profile.foto-update');
                Route::delete('foto-destroy/{id}', [ProfileController::class, 'destroyFoto'])
                    ->name('profile.foto-destroy');
            }
        );
    }
);
