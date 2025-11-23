<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::factory()->create([
            'name' => 'Marion Erwin Dien',
            'email' => 'admin@gmail.com',
            'role' => 1,
            'password' => bcrypt('12345678'),
        ]);
    }
}
