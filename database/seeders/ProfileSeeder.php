<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed some user profiles
        Profile::create([
            'user_id' => 1,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'sex' => 'Male',
            'phone' => '123456789',
            'address' => '123 Main Street',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Profile::create([
            'user_id' => 2,
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'sex' => 'Female',
            'phone' => '987654321',
            'address' => '456 Oak Avenue',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
