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
        Permission::create(['name' => 'role_edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'role_show', 'guard_name' => 'web']);
        Permission::create(['name' => 'role_delete', 'guard_name' => 'web']);
        Permission::create(['name' => 'role_access', 'guard_name' => 'web']);
                
        Permission::create(['name' => 'permission_create', 'guard_name' => 'web']);
        Permission::create(['name' => 'permission_edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'permission_show', 'guard_name' => 'web']);
        Permission::create(['name' => 'permission_delete', 'guard_name' => 'web']);
        Permission::create(['name' => 'permission_access', 'guard_name' => 'web']);

        Permission::create(['name' => 'user_create', 'guard_name' => 'web']);
        Permission::create(['name' => 'user_edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'user_show', 'guard_name' => 'web']);
        Permission::create(['name' => 'user_delete', 'guard_name' => 'web']);
        Permission::create(['name' => 'user_access', 'guard_name' => 'web']);

        Permission::create(['name' => 'debug_access', 'guard_name' => 'web']);
    }
}
