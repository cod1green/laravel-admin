<?php

namespace App\Http\Livewire\Admin\Backup;

use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Response;

class Index extends Component
{
    public function render()
    {
        abort_if(Gate::denies('backup'), Response::HTTP_FORBIDDEN);
        return view('livewire.admin.backup.index');
    }
}
