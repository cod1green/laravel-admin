<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(
            [
                'id' => 1,
                'name' => 'admin',
                'guard_name' => 'web',
            ]
        );
    }
}
