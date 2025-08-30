<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'type_user' => 'admin',
        ]);

        User::create([
            'name' => 'Client Test',
            'email' => 'client@example.com',
            'password' => Hash::make('password'),
            'type_user' => 'client',
        ]);
    }
}
