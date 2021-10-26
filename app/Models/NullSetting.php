<?php

namespace App\Models;

class NullSetting extends Setting
{
    protected $attributes = [
        'site_name' => 'Laravel Admin',
        'site_title' => 'Admin',
        'site_email' => 'email@example.com',
        'footer_name' => 'Laravel Admin',
        'sidebar_collapse' => false,
    ];
}
