<?php

namespace App\Http\Livewire\Admin\Permission;

use App\Models\Permission;
use Livewire\Component;

class Show extends Component
{
    public Permission $permission;

    public function render()
    {
        return view('livewire.admin.permission.show');
    }
}
