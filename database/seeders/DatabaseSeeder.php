<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Taylor Swift',
            'email' => 'ts13@yahoo.com',
            'password' => Hash::make('tSwizzle1989'),
        ]);
        User::factory()->create([
            'name' => 'HR',
            'email' => 'hrm@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        $roles = ['super-admin', 'admin', 'user', 'employee', 'hrm', 'frm', 'scm', 'mfr', 'crm'];
        foreach ($roles as $role) {
            DB::table('roles')->insert(['name' => $role, 'guard_name' => 'web']);
        }
        DB::table('model_has_roles')->insert([
            'role_id' => '1', 
            'model_type' => 'App\Models\User', 
            'model_id' => '1'
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => '3', 
            'model_type' => 'App\Models\User', 
            'model_id' => '2'
        ]);

        $departments = ['HRM', 'FRM', 'SCM', 'MFR', 'CRM'];
        foreach ($departments as $department) {
            DB::table('departments')->insert(['name' => $department, 'status' => 'active']);
        }
        DB::table('employees')->insert([
            'first_name' => 'Taylor',
            'middle_name' => 'Alison',
            'last_name' => 'Swift',
            'email' => 'tswift@yahoo.com',
            'status' => 'active'
        ]);
    }
}
