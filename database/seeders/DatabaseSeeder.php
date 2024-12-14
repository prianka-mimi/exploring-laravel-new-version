<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
            'email' => 'p@gmail.com',
            'password' => Hash::make('11'),
        ]);
    }
}
