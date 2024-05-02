<?php

namespace Database\Seeders;

use App\Models\Favorities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'favorite_name' => 'Ăn Uống',
            'favorite_description' => 'Bánh Tráng',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Favorities::create([
            'favorite_id' => 2,
            'favorite_name' => 'Thể Thao',
            'favorite_description' => 'Đá Banh',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Favorities::create([
            'favorite_id' => 5,
            'favorite_name' => 'Game',
            'favorite_description' => 'NRO',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Add more seed da
    }
}
