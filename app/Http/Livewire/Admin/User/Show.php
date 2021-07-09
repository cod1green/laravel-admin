<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Show extends Component
{
    public User $user;

    public function render()
    {
        abort_if(Gate::denies('user-read'), Response::HTTP_FORBIDDEN);
        return view('livewire.admin.user.show');
    }
}
