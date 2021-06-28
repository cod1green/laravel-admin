<?php

use App\Http\Controllers\Admin\BackupController;
use App\Http\Controllers\Admin\BackupDownloadController;
use App\Http\Controllers\Admin\CommandController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', App\Http\Controllers\HomeController::class)->name('home');

Auth::routes(['register' => true, 'verify' => true]);

Route::middleware(['verified'])->group(
    function () {
        Route::group(
            ['middleware' => ['auth'], 'prefix' => config('project.prefix'), 'as' => 'admin.'],
            function () {
                Route::get('/', DashboardController::class)->name('dashboard');

                Route::resource(
                    'users',
                    UserController::class,
                    ['except' => ['store', 'update', 'destroy']]
                );

                Route::resource(
                    'roles',
                    RoleController::class,
                    ['except' => ['store', 'update', 'destroy']]
                );

                Route::resource(
                    'permissions',
                    PermissionController::class,
                    ['except' => ['store', 'update', 'destroy']]
                );

                Route::get('backups', BackupController::class)->name('backup');

                Route::get('/backups/download/disk/{disk}/file/{file}', BackupDownloadController::class)
                    ->name('backup.download');

                Route::get('/optimize-cache', [CommandController::class, 'optimize'])->name('optimize.cache');
                Route::get('/optimize-clear', [CommandController::class, 'optimizeClear'])
                    ->name('optimize.clear');
            }
        );

        Route::group(
            ['middleware' => ['auth']],
            function () {
                Route::get('profile', [ProfileController::class, 'edit'])->name('profile');
                Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

                Route::put('foto-update/{id}', [ProfileController::class, 'updateFoto'])
                    ->name('profile.foto-update');
                Route::delete('foto-destroy/{id}', [ProfileController::class, 'destroyFoto'])
                    ->name('profile.foto-destroy');
            }
        );
    }
);
