<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Feedback;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Feedback::create(
            [
                'name' => 'Austin Curran',
                'email' => 'test@test.com',
                'body' => 'This is my first test feedback',
            ]
        );

        Feedback::create(
            [
                'name' => 'John Smith',
                'email' => 'test@example.com',
                'body' => 'Here is some useful feedback',
            ]
        );
    }
}
