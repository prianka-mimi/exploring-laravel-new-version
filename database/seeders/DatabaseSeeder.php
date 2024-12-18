<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Patient::factory(150)->create();

        User::factory()->create([
            'name' => 'Prianka Mimi',
            'username' => 'prianka',
            'email' => 'p@gmail.com',
            'password' => Hash::make('11'),
            'role' => '1',
        ]);

        DB::table('roles')->insert([
            'role_id' => '8',
            'role_name' => 'Receptionist',
            'created_at' => now(),
        ]);

        Role::insert([
            'role_id' => '9',
            'role_name' => 'Patient',
            'created_at' => now(),
        ]);

        $this->call([
            RoleSeeder::class,
        ]);
    }
}
