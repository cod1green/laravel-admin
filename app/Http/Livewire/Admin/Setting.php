<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting as SettingModel;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class Setting extends Component
{
    public $state = [];

    public function render()
    {
        abort_if(Gate::denies('setting'), Response::HTTP_FORBIDDEN);
        return view('livewire.admin.setting');
    }

    public function mount()
    {
        $setting = SettingModel::first();

        if ($setting) {
            $this->state = $setting->toArray();
        }
    }

    public function submit()
    {
        $this->validate();

        $setting = SettingModel::first();

        if ($setting) {
            $setting->update($this->state);
        } else {
            SettingModel::create($this->state);
        }

        Cache::forget('setting');

        $this->dispatchBrowserEvent('updated:reload', ['message' => trans('project.setting.updated')]);
    }

    protected function rules(): array
    {
        return [
            'state.site_name' => [
                'string',
                'required',
            ],
            'state.site_email' => [
                'email:rfc',
                'required'
            ],
            'state.site_title' => [
                'string',
                'required',
            ],
            'state.footer_name' => [
                'string',
                'required',
            ]
        ];
    }
}
