<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LayoutFrontend extends Component
{
    public function render()
    {
        return view(config('admin.frontend_layout'));
    }
}
