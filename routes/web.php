<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Index;
use App\Http\Livewire\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('index');

Auth::routes(['register' => true, 'verify' => true]);

Route::middleware(['verified'])->group(
    function () {
        Route::get('home', Home::class)->name('home');

        Route::get('profile', Profile::class)->middleware('auth')->name('profile');
    }
);

require __DIR__ . '/web/admin.php';
