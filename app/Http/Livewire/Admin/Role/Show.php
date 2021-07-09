<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Show extends Component
{
    public Role $role;

    public function render()
    {
        abort_if(Gate::denies('role-read'), Response::HTTP_FORBIDDEN);
        return view('livewire.admin.role.show');
    }
}
