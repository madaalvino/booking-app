<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data pengguna awal
        $users = [
            [
                'username' => 'admin01',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'tlp' => '081234567890',
                'role' => 'admin',
                'password' => Hash::make('password123'),
                'remember_token' => \Str::random(10),
            ],
            [
                'username' => 'user01',
                'email' => 'user@example.com',
                'email_verified_at' => now(),
                'tlp' => '087654321098',
                'role' => 'pengguna',
                'password' => Hash::make('password123'),
                'remember_token' => \Str::random(10),
            ],
            [
                'username' => 'user02',
                'email' => 'user2@example.com',
                'email_verified_at' => null,
                'tlp' => '082345678901',
                'role' => 'pengguna',
                'password' => Hash::make('password123'),
                'remember_token' => \Str::random(10),
            ],
        ];

        // Masukkan data ke tabel users
        foreach ($users as $user) {
            User::create($user);
        }
    }
}

