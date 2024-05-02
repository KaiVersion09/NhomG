<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Favorities;
class UserFavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed some user favorites
        Favorities::create([
            'user_id' => 5,
            'favorite_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Favorities::create([
            'user_id' => 2,
            'favorite_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Favorities::create([
            'user_id' => 1,
            'favorite_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
