<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'john_doe',
            'password' => Hash::make('password123') // Always hash the password
        ]);

        User::create([
            'username' => 'alice_smith',
            'password' => Hash::make('password456')
        ]);

        User::create([
            'username' => 'bob_jones',
            'password' => Hash::make('password789')
        ]);
    }
}
