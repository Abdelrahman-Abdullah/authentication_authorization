<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = Permission::all();
        $permissionIndex = 0;
        $roles = [
            [
                'name' => 'admin',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'writer',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'creator',
                'guard_name' => 'admin',
            ],
        ];

        foreach ($roles as $role) {
            $roleCreated = Role::create($role);
            $roleCreated->givePermissionTo($permission[$permissionIndex++]);
        }
    }
}
