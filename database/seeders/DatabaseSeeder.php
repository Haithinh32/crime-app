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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'fullname' => 'Test User,
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::factory(10)->create();
        \App\Models\post::factory(10)->create();
    }
}
