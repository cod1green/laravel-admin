<?php

use App\Http\Controllers\Admin\{CommandController, DownloadController};
use App\Http\Livewire\Admin\{Backup, Dashboard};
use App\Http\Livewire\Admin\Permission\{Create as PermissionCreate,
    Edit as PermissionEdit,
    Index as PermissionIndex,
    Show as PermissionShow
};
use App\Http\Livewire\Admin\Role\{Create as RoleCreate, Edit as RoleEdit, Index as RoleIndex, Show as RoleShow};
use App\Http\Livewire\Admin\User\{Create as UserCreate, Edit as UserEdit, Index as UserIndex, Show as UserShow};
use App\Http\Livewire\Home;
use App\Http\Livewire\Index;
use App\Http\Livewire\Profile;

Route::get('/', Index::class)->name('index');

Auth::routes(['register' => true, 'verify' => true]);

Route::middleware(['verified'])->group(
    function () {
        Route::group(
            ['middleware' => ['auth'], 'prefix' => config('admin.prefix'), 'as' => 'admin.'],
            function () {
                Route::get('dashboard', Dashboard::class)->name('dashboard');

                Route::get('users', UserIndex::class)->name('users.index');
                Route::get('users/create', UserCreate::class)->name('users.create');
                Route::get('users/{user}/edit', UserEdit::class)->name('users.edit');
                Route::get('users/{user}', UserShow::class)->name('users.show');

                Route::get('roles', RoleIndex::class)->name('roles.index');
                Route::get('roles/create', RoleCreate::class)->name('roles.create');
                Route::get('roles/{role}/edit', RoleEdit::class)->name('roles.edit');
                Route::get('roles/{role}', RoleShow::class)->name('roles.show');

                Route::get('permissions', PermissionIndex::class)->name('permissions.index');
                Route::get('permissions/create', PermissionCreate::class)->name('permissions.create');
                Route::get('permissions/{permission}/edit', PermissionEdit::class)->name('permissions.edit');
                Route::get('permissions/{permission}', PermissionShow::class)->name('permissions.show');

                Route::get('backups', Backup::class)->name('backups');
                Route::get('download/{disk}/{file}', DownloadController::class)->name('backup.download');

                Route::get('/optimize/cache', [CommandController::class, 'optimize'])->name('optimize.cache');
                Route::get('/optimize/clear', [CommandController::class, 'clear'])->name('optimize.clear');
            }
        );

        Route::get('home', Home::class)->name('home');

        Route::get('profile', Profile::class)->middleware('auth')->name('profile');
    }
);
