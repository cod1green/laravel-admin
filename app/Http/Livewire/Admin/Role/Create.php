<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
    public Role $role;

    public array $permissions = [];

    public array $listsForFields = [];

    public function render()
    {
        abort_if(Gate::denies('role-create'), Response::HTTP_FORBIDDEN);
        return view('livewire.admin.role.create');
    }

    public function mount(Role $role)
    {
        $this->role = $role;
        $this->initListsForFields();
    }

    public function submit()
    {
        $this->validate();

        $this->role->name = Str::slug($this->role->name);
        $this->role->guard_name = config('auth.defaults.guard');
        $this->role->save();
        $this->role->permissions()->sync($this->permissions);

        return redirect()->route('admin.roles.index');
    }

    protected function rules(): array
    {
        return [
            'role.name' => [
                'string',
                'required',
            ],
            'permissions' => [
                'array',
            ],
            'permissions.*.id' => [
                'integer',
                'exists:permissions,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['permissions'] = Permission::pluck('name', 'id');
    }
}
