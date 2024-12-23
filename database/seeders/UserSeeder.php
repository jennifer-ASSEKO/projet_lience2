<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        User::create([
            'name' => 'Admin User',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Agent User',
            'password' => Hash::make('agent123'),
            'role' => 'agent',
        ]);

        User::create([
            'name' => 'Client User',
            'password' => Hash::make('client123'),
            'role' => 'client',
        ]);
    }
}