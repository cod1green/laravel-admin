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
        return redirect()->back()->with('success', "Optimize cache with success");
    }

    public function optimizeClear()
    {
        Artisan::call('optimize:clear');
        return redirect()->back()->with('success', "Optimize clear with success");
    }
}
