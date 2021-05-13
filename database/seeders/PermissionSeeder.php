<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'role_create', 'guard_name' => 'web']);
        Permission::create(['name' => 'role_read', 'guard_name' => 'web']);
        Permission::create(['name' => 'role_update', 'guard_name' => 'web']);
        Permission::create(['name' => 'role_delete', 'guard_name' => 'web']);

        Permission::create(['name' => 'permission_create', 'guard_name' => 'web']);
        Permission::create(['name' => 'permission_read', 'guard_name' => 'web']);
        Permission::create(['name' => 'permission_update', 'guard_name' => 'web']);
        Permission::create(['name' => 'permission_delete', 'guard_name' => 'web']);

        Permission::create(['name' => 'user_create', 'guard_name' => 'web']);
        Permission::create(['name' => 'user_read', 'guard_name' => 'web']);
        Permission::create(['name' => 'user_update', 'guard_name' => 'web']);
        Permission::create(['name' => 'user_delete', 'guard_name' => 'web']);

        Permission::create(['name' => 'debug', 'guard_name' => 'web']);

        Permission::create(['name' => 'command', 'guard_name' => 'web']);
    }
}
