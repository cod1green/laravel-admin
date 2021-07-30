<?php

namespace App\Http\Livewire\Admin\Permission;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
    public Permission $permission;

    public array $roles = [];

    public array $listsForFields = [];

    public function mount(Permission $permission)
    {
        $this->permission = $permission;
        $this->initListsForFields();
    }

    public function render()
    {
        abort_if(Gate::denies('permission-create'), Response::HTTP_FORBIDDEN);
        return view('livewire.admin.permission.create');
    }

    public function submit()
    {
        $this->validate();

        $this->permission->name = Str::slug($this->permission->name);
        $this->permission->guard_name = config('auth.defaults.guard');
        $this->permission->save();
        $this->permission->roles()->sync($this->roles);

        return redirect()->route('admin.permissions.index');
    }

    protected function rules(): array
    {
        return [
            'permission.name' => [
                'string',
                'required',
            ],
            'roles' => [
                'array',
            ],
            'roles.*.id' => [
                'integer',
                'exists:roles,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['roles'] = Role::pluck('name', 'id');
    }
}
