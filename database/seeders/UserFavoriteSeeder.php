<?php

namespace Database\Seeders;

use App\Models\Favorities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserFavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed some user favorites
        Favorities::create([
            'user_favorite_id' => 1,
            'user_id' => 1,
            'favorite_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Favorities::create([
            'user_favorite_id' => 2,
            'user_id' => 2,
            'favorite_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Favorities::create([
            'user_favorite_id' => 1,
            'user_id' => 3,
            'favorite_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
