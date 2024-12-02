<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Array of users to create
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
            ],
            [
                'name' => 'test',
                'email' => 'test@example.com',
                'password' => Hash::make('test'),
            ],
        ];

        // Loop through and create each user
        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
