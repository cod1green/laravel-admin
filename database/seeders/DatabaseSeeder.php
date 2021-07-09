<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (App::environment() !== 'production') {
            $roles = Role::factory()->count(5)->create();
            $permissions = Permission::factory()->count(5)->create();

            User::factory()
                ->count(15)
                ->hasAttached($roles)
                ->hasAttached($permissions)
                ->create();
        }
    }
}
