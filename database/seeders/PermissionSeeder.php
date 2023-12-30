<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'name' => 'create_user',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'delete_user',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'show_user',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'edit_user',
                'guard_name' => 'admin',
            ],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
