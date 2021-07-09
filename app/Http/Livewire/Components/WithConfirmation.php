<?php

namespace App\Http\Livewire\Components;

trait WithConfirmation
{
    public function confirm($callback, ...$argv)
    {
        $this->emit('confirm', compact('callback', 'argv'));
    }
}
