<?php

use App\Http\Livewire\Admin\User\Create;
use App\Http\Livewire\Admin\User\Edit;
use App\Http\Livewire\Admin\User\Index;
use App\Http\Livewire\Admin\User\Show;

Route::get('users', Index::class)->name('users.index');
Route::get('users/create', Create::class)->name('users.create');
Route::get('users/{user}/edit', Edit::class)->name('users.edit');
Route::get('users/{user}', Show::class)->name('users.show');

