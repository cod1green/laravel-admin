<?php

use App\Http\Controllers\Admin\CommandController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

                Route::get('/route-cache', [CommandController::class, 'route'])->name('route.cache');
                Route::get('/route-clear', [CommandController::class, 'routeClear'])->name('route.clear');

                Route::get('/view-cache', [CommandController::class, 'view'])->name('view.cache');
                Route::get('/view-clear', [CommandController::class, 'viewClear'])->name('view.clear');

                Route::get('/config-cache', [CommandController::class, 'config'])->name('config.cache');
                Route::get('/config-clear', [CommandController::class, 'configClear'])->name('config.clear');

                Route::get('/cache-clear', [CommandController::class, 'cacheClear'])->name('cache.clear');
            }
        );

        // perfil do usuario
        Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

        // fotos do perfil
        Route::put('foto-update/{id}', [ProfileController::class, 'updateFoto'])->name(
            'profile.foto-update'
        );
        Route::delete('foto-destroy/{id}', [ProfileController::class, 'destroyFoto'])->name(
            'profile.foto-destroy'
        );
    }
);

// home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes(['register' => true, 'verify' => true]);
