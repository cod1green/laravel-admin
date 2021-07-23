<?php

use App\Http\Livewire\Admin\Permission\Create;
use App\Http\Livewire\Admin\Permission\Edit;
use App\Http\Livewire\Admin\Permission\Index;
use App\Http\Livewire\Admin\Permission\Show;

Route::get('permissions', Index::class)->name('permissions.index');
Route::get('permissions/create', Create::class)->name('permissions.create');
Route::get('permissions/{permission}/edit', Edit::class)->name('permissions.edit');
Route::get('permissions/{permission}', Show::class)->name('permissions.show');
