<?php

namespace App\Http\Livewire\Admin\Role;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Role;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class Index extends AdminComponent
{
    public int $perPage;

    public array $orderable;

    public string $search = '';

    public array $selected = [];

    public array $paginationOptions;

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
        $query = Role::with(['permissions'])->advancedFilter(
            [
                's' => $this->search ?: null,
                'order_column' => $this->sortBy,
                'order_direction' => $this->sortDirection,
            ]
        );

        $roles = $query->paginate($this->perPage);

        return view('livewire.admin.role.index', compact('query', 'roles'));
    }

    public function mount()
    {
        $this->sortBy = 'id';
        $this->sortDirection = 'desc';
        $this->perPage = config('project.pagination.per_page');
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable = (new Role())->orderable;
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
        abort_if(Gate::denies('role-delete'), Response::HTTP_FORBIDDEN);

        Role::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(Role $role)
    {
        abort_if(Gate::denies('role-delete'), Response::HTTP_FORBIDDEN);

        $role->delete();
    }
}
