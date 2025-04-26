<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleOrPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $roles = ['super-admin', 'admin', 'user', 'employee', 'hrm', 'frm', 'scm', 'mfr', 'crm'];
        foreach ($roles as $role) {
            Role::factory()->create(['name' => $role]);
        }

        // Create permissions
        $permissions = [
            'create-role',
            'edit-role',
            'delete-role',
            'create-permission',
            'edit-permission',
            'delete-permission',
            'give-role',
            'give-permission',
            'delete-user',
            'view-user',
            'edit-user',
            'create-user',
            'view-role',
            'view-permission'
        ];
        foreach ($permissions as $permission) {
            Permission::Create(['name' => $permission]);
        }
    }
}
