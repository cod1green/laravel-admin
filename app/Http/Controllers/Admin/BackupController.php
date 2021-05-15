<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BackupController extends Controller
{
    public function __invoke()
    {
        return view('admin.backup');
    }
}
