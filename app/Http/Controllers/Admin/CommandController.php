<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class CommandController extends Controller
{
    public function optimize()
    {
        Artisan::call('optimize');

        return redirect()->route('admin.dashboard');
    }

    public function optimizeClear()
    {
        Artisan::call('optimize:clear');

        return redirect()->route('admin.dashboard');
    }

    public function route()
    {
        Artisan::call('route:clear');
        Artisan::call('route:cache');

        return redirect()->route('admin.dashboard');
    }

    public function routeClear()
    {
        Artisan::call('route:clear');

        return redirect()->route('admin.dashboard');
    }

    public function config()
    {
        Artisan::call('config:clear');
        Artisan::call('config:cache');

        return redirect()->route('admin.dashboard');
    }

    public function configClear()
    {
        Artisan::call('config:clear');
        Artisan::call('config:cache');

        return redirect()->route('admin.dashboard');
    }

    public function view()
    {
        Artisan::call('view:clear');
        Artisan::call('view:cache');

        return redirect()->route('admin.dashboard');
    }

    public function viewClear()
    {
        Artisan::call('view:clear');

        return redirect()->route('admin.dashboard');
    }

    public function cacheClear()
    {
        Artisan::call('cache:clear');

        return redirect()->route('admin.dashboard');
    }
}
