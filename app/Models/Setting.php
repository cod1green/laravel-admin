<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public $fillable = [
        'site_name',
        'site_email',
        'site_title',
        'footer_name',
        'sidebar_collapse',
    ];

    protected $casts = [
        'sidebar_collapse' => 'boolean',
    ];
}
