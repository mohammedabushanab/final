<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin::create(['id' => "2", 'email' => 'xitozamumi@mailinator.com',  'password' => '$2y$10$iqew5cIMOKpiTbF7DX2YfOTUYI87HvCUjQ/wSC.m9yrqcDnAA7x42', 'created_at' => now(), 'updated_at' => now()]);
        // Admin::create(['id' => "2", 'firstName' => 'Zi', 'lastName' => 'Ree', 'email' => 'test@gmail.com', 'mobile' => '0518181', 'date_of_birth' => '1978-01-06', 'gender' => 'female', 'status' => 'inactive', 'password' => 'hello', 'created_at' => now(), 'updated_at' => now()]);
        // Admin::create(['id' => "2", 'email' => 'test@gmail.com',  'password' => 'hello', 'created_at' => now(), 'updated_at' => now()]);
        // Admin::create(['id' => "3", 'email' => 'test@gmail.com',  'password' => Hash::make('hello'), 'created_at' => now(), 'updated_at' => now()]);
        // Admin::create(['id' => "4", 'email' => 'tes@gmail.com',  'password' => 'hello', 'created_at' => now(), 'updated_at' => now()]);
        // Admin::create(['id' => "6", 'email' => 't@gmail.com',  'password' => '$2y$10$iqew5cIMOKpiTbF7DX2YfOTUYI87HvCUjQ/wSC.m9yrqcDnAA7x42', 'created_at' => now(), 'updated_at' => now()]);
    }
}
