<?php

namespace App\Http\Livewire\Admin\Permission;

use App\Http\Livewire\Components\TableComponent;
use App\Models\Permission;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class Index extends TableComponent
{
    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'sortBy' => [
            'except' => 'id',
        ],
        'sortDirection' => [
            'except' => 'desc',
        ],
    ];

    public function render()
    {
        abort_if(Gate::denies('permission-read'), \Symfony\Component\HttpFoundation\Response::HTTP_FORBIDDEN);

        $query = Permission::with(['roles'])->advancedFilter(
            [
                's' => $this->search ?: null,
                'order_column' => $this->sortBy,
                'order_direction' => $this->sortDirection,
            ]
        );

        $permissions = $query->paginate($this->perPage);

        return view('livewire.admin.permission.index', compact('query', 'permissions'));
    }

    public function mount()
    {
        $this->sortBy = 'id';
        $this->sortDirection = 'desc';
        $this->perPage = config('admin.pagination.per_page');
        $this->paginationOptions = config('admin.pagination.options');
        $this->orderable = (new Permission())->orderable;
    }

    public function getSelectedCountProperty()
    {
        return count($this->selected);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function resetSelected()
    {
        $this->selected = [];
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('permission-delete'), Response::HTTP_FORBIDDEN);

        Permission::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(Permission $permission)
    {
        abort_if(Gate::denies('permission-delete'), Response::HTTP_FORBIDDEN);

        $permission->delete();
    }
}
