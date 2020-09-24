<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{
    public function optimize()
    {
        Artisan::call('optimize');

        return redirect()->route('admin.home');
    }

    public function optimizeClear()
    {
        Artisan::call('optimize:clear');

        return redirect()->route('admin.home');
    }

    public function route()
    {
        Artisan::call('route:clear');
        Artisan::call('route:cache');

        return redirect()->route('admin.home');
    }

    public function routeClear()
    {
        Artisan::call('route:clear');

        return redirect()->route('admin.home');
    }

    public function config()
    {
        Artisan::call('config:clear');
        Artisan::call('config:cache');

        return redirect()->route('admin.home');
    }

    public function configClear()
    {
        Artisan::call('config:clear');
        Artisan::call('config:cache');

        return redirect()->route('admin.home');
    }

    public function view()
    {
        Artisan::call('view:clear');
        Artisan::call('view:cache');

        return redirect()->route('admin.home');
    }

    public function viewClear()
    {
        Artisan::call('view:clear');

        return redirect()->route('admin.home');
    }

    public function cacheClear()
    {
        Artisan::call('cache:clear');

        return redirect()->route('admin.home');
    }
}
