<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'user-create', 'guard_name' => 'web']);
        Permission::create(['name' => 'user-read', 'guard_name' => 'web']);
        Permission::create(['name' => 'user-update', 'guard_name' => 'web']);
        Permission::create(['name' => 'user-delete', 'guard_name' => 'web']);

        Permission::create(['name' => 'role-create', 'guard_name' => 'web']);
        Permission::create(['name' => 'role-read', 'guard_name' => 'web']);
        Permission::create(['name' => 'role-update', 'guard_name' => 'web']);
        Permission::create(['name' => 'role-delete', 'guard_name' => 'web']);

        Permission::create(['name' => 'permission-create', 'guard_name' => 'web']);
        Permission::create(['name' => 'permission-read', 'guard_name' => 'web']);
        Permission::create(['name' => 'permission-update', 'guard_name' => 'web']);
        Permission::create(['name' => 'permission-delete', 'guard_name' => 'web']);

        Permission::create(['name' => 'debug', 'guard_name' => 'web']);
        Permission::create(['name' => 'command', 'guard_name' => 'web']);
        Permission::create(['name' => 'backup', 'guard_name' => 'web']);
    }
}
