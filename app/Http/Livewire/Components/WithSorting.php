<?php

namespace App\Http\Livewire\Components;

trait WithSorting
{
    public $sortBy = 'id';
    public $sortDirection = 'desc';
    public $label;

    public function sortBy($field)
    {
        $this->sortBy = $field;

        $this->sortDirection = $this->sortBy === $field
            ? $this->reverseSort()
            : 'asc';
    }

    public function reverseSort()
    {
        return $this->sortDirection === 'asc'
            ? 'desc'
            : 'asc';
    }
}
