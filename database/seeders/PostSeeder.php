<?php

namespace Database\Seeders;

use App\Models\Posts;
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
            'post_name' => 'Bảng chữ cái ',
            'post_description' => 'ABC',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Posts::create([
            'post_id' => 2,
            'user_id' => 2,
            'post_name' => 'Số',
            'post_description' => '1234',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Posts::create([
            'post_id' => 3,
            'user_id' => 1,
            'post_name' => 'Số Số',
            'post_description' => '4321',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
