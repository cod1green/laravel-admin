<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Livewire\Component;

class Edit extends Component
{
    public Role $role;

    public array $permissions = [];

    public array $listsForFields = [];

    public function render()
    {
        abort_if(Gate::denies('role-update'), Response::HTTP_FORBIDDEN);
        return view('livewire.admin.role.edit');
    }

    public function mount(Role $role)
    {
        $this->role = $role;
        $this->permissions = $this->role->permissions()->pluck('id')->toArray();
        $this->initListsForFields();
    }

    public function submit()
    {
        $this->validate();

        $this->role->name = Str::slug($this->role->name);
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
                'required',
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
