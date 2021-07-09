<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Livewire\WithPagination;

class TableComponent extends Component
{
    use WithConfirmation;
    use WithPagination;
    use WithSorting;

    protected string $paginationTheme = 'bootstrap';

    public int $perPage;

    public array $orderable;

    public string $search = '';

    public array $selected = [];

    public array $paginationOptions;
}
