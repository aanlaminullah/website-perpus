<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::truncate();
        // 1. Contoh satu user (Admin Utama)
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Password di-hash
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ---

        // 2. Contoh beberapa user sampel (Menggunakan array)
        $users = [
            [
                'name' => 'adminperpus',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('adminperpus'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
