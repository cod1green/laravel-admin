<?php

use App\Http\Livewire\Admin\Role\Create;
use App\Http\Livewire\Admin\Role\Edit;
use App\Http\Livewire\Admin\Role\Index;
use App\Http\Livewire\Admin\Role\Show;

Route::get('roles', Index::class)->name('roles.index');
Route::get('roles/create', Create::class)->name('roles.create');
Route::get('roles/{role}/edit', Edit::class)->name('roles.edit');
Route::get('roles/{role}', Show::class)->name('roles.show');

