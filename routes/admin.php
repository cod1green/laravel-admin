<?php

use App\Http\Controllers\Admin\CommandController;
use App\Http\Controllers\Admin\DownloadController;
use App\Http\Livewire\Admin\Backup;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Setting;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('dashboard');

Route::get('backups', Backup::class)->name('backups');

Route::get('download/{disk}/{file}', DownloadController::class)->name('backup.download');

Route::get('optimize/cache', [CommandController::class, 'optimize'])->name('optimize.cache');
Route::get('optimize/clear', [CommandController::class, 'clear'])->name('optimize.clear');

Route::get('settings', Setting::class)->name('settings');

require __DIR__ . '/admin/users.php';
require __DIR__ . '/admin/roles.php';
require __DIR__ . '/admin/permissions.php';
