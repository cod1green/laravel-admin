<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;

class AdminComponent extends Component
{
    use WithConfirmation;
    use WithPagination;
    use WithSorting;

    protected $paginationTheme = 'bootstrap';
}
