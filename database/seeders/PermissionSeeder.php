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
        Permission::create(['name' => "Create-Doctor", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Index-Doctor", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Edit-Doctor", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Delete-Doctor", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        Permission::create(['name' => "Create-Supplier", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Index-Supplier", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Edit-Supplier", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Delete-Supplier", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        Permission::create(['name' => "Create-Customer", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Index-Customer", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Edit-Customer", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Delete-Customer", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        // Permission::create(['name' => "Create-Medicine", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Index-Medicine", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Edit-Medicine", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Delete-Medicine", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        // Permission::create(['name' => "Create-Stores", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Index-Stores", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Edit-Stores", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Delete-Stores", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        Permission::create(['name' => "Index-About", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Edit-About", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Delete-About", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        Permission::create(['name' => "Create-Category", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Index-Category", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Edit-Category", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Delete-Category", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        Permission::create(['name' => "Create-Sale", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Index-Sale", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Edit-Sale", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => "Delete-Sale", 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
    }
}
