<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        abort_if(Gate::denies('dashboard'), Response::HTTP_FORBIDDEN);
        return view('livewire.admin.dashboard');
    }
}
