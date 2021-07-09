<?php

namespace App\Http\Livewire\Components;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ToggleButton extends Component
{
    public Model $model;
    public string $field;
    public string $name;

    public bool $isActive;

    public string $designTemplate = 'bootstrap';

    public function mount()
    {
        $this->isActive = (bool)$this->model->getAttribute($this->field);
    }

    public function render()
    {
        return view('livewire.components.' . $this->designTemplate . '.toggle-button');
    }

    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();
    }
}
