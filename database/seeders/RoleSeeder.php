<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::create(['name' => "Owner", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Role::create(['name' => "assistant", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        // Role::create(['name' => "Doctor 1", 'guard_name' => 'doctor', 'created_at' => now(), 'updated_at' => now()]);
        // Role::create(['name' => "Doctor 2", 'guard_name' => 'doctor', 'created_at' => now(), 'updated_at' => now()]);
        // Role::create(['name' => "Doctor 3", 'guard_name' => 'doctor', 'created_at' => now(), 'updated_at' => now()]);
    }
}
