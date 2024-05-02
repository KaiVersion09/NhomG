<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // Seed some posts
    Posts::create([
        'post_id' => 1,
        'user_id' => 1,
        'post_name' => 'First Post',
        'post_description' => 'Description of the first post.',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    Posts::create([
        'post_id' => 2,
        'user_id' => 2,
        'post_name' => 'Second Post',
        'post_description' => 'Description of the second post.',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    Posts::create([
        'post_id' => 3,
        'user_id' => 1,
        'post_name' => 'Third Post',
        'post_description' => 'Description of the third post.',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    }
}
