<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'role_id' => '1',
            'role_name' => 'Administrator',
            'created_at' => now(),
        ]);

        DB::table('roles')->insert([
            'role_id' => '2',
            'role_name' => 'Management',
            'created_at' => now(),
        ]);

        DB::table('roles')->insert([
            'role_id' => '3',
            'role_name' => 'Doctor',
            'created_at' => now(),
        ]);

        DB::table('roles')->insert([
            'role_id' => '4',
            'role_name' => 'Nurse',
            'created_at' => now(),
        ]);

        DB::table('roles')->insert([
            'role_id' => '5',
            'role_name' => 'Laboratorist',
            'created_at' => now(),
        ]);

        DB::table('roles')->insert([
            'role_id' => '6',
            'role_name' => 'Pharmacist',
            'created_at' => now(),
        ]);

        DB::table('roles')->insert([
            'role_id' => '7',
            'role_name' => 'Accountant',
            'created_at' => now(),
        ]);
    }
}
