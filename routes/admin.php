<?php

use App\Http\Controllers\Admin\CommandController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Livewire\Admin\Backup;
use App\Http\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('dashboard');

Route::get('backups', Backup::class)->name('backups');

Route::get('download/{disk}/{file}', DownloadController::class)->name('backup.download');

Route::get('optimize/cache', [CommandController::class, 'optimize'])->name('optimize.cache');
Route::get('optimize/clear', [CommandController::class, 'clear'])->name('optimize.clear');

require __DIR__ . '/admin/users.php';
require __DIR__ . '/admin/roles.php';
require __DIR__ . '/admin/permissions.php';
