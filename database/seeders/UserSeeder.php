<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create(
            [
                'name' => 'Administrator',
                'email' => env('APP_ADMIN_EMAIL', 'admin@admin.com'),
                'password' => env('APP_ADMIN_PASSWORD', 'admin'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'active' => true,
            ]
        )->assignRole(1);
    }
}
