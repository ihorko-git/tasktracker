<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'ADMIN',
            'password' => 'test123'
        ]);

        \App\Models\User::factory()->count(4)->create();

        \App\Models\Category::factory()->create([
            'name' => 'Urgent',
            'type' => 'urgent'
        ]);

        \App\Models\Category::factory()->count(4)->create();

        \App\Models\Task::factory()->count(50)->create();

    }
}
