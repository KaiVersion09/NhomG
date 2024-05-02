<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Favorities;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed some user favorites
        Favorities::create([
            'favorite_id' => 1,
            'favorite_name' => 'Favorite 1',
            'favorite_description' => 'Description of favorite 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Favorities::create([
            'favorite_id' => 2,
            'favorite_name' => 'Favorite 2',
            'favorite_description' => 'Description of favorite 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Favorities::create([
            'favorite_id' => 5,
            'favorite_name' => 'Favorite 3',
            'favorite_description' => 'Description of favorite 3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more seed data if needed
    }
}

