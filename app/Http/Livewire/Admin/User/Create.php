<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public User $user;

    public array $roles = [];

    public array $permissions = [];

    public string $password = '';

    public array $listsForFields = [];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.admin.user.create');
    }

    public function submit()
    {
        $this->validate();
        $this->user->password = $this->password;
        $this->user->save();
        $this->user->roles()->sync($this->roles);
        $this->user->permissions()->sync($this->permissions);

        return redirect()->route('admin.users.index');
    }

    protected function rules(): array
    {
        return [
            'user.name' => [
                'string',
                'required',
            ],
            'user.email' => [
                'email:rfc',
                'required',
                'unique:users,email',
            ],
            'password' => [
                'string',
                'min:8',
                'required',
            ],
//            'roles' => [
//                'required',
//                'array',
//            ],
//            'roles.*.id' => [
//                'integer',
//                'exists:roles,id',
//            ],
//            'permissions' => [
//                'required',
//                'array',
//            ],
//            'permissions.*.id' => [
//                'integer',
//                'exists:permissions,id',
//            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['roles'] = Role::pluck('name', 'id');
        $this->listsForFields['permissions'] = Permission::pluck('name', 'id');
    }
}
