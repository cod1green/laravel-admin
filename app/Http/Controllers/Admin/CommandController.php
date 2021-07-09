<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class CommandController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:command');
    }

    public function optimize()
    {
        Artisan::call('optimize');
        return redirect()->back();
    }

    public function clear()
    {
        Artisan::call('optimize:clear');
        return redirect()->back();
    }
}
