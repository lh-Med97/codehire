<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@codehire.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'bio' => 'System administrator'
        ]);

        // Create employer users
        User::create([
            'name' => 'Tech Corp',
            'email' => 'employer@techcorp.com',
            'password' => Hash::make('password'),
            'role' => 'employer',
            'company_name' => 'Tech Corp',
            'bio' => 'Leading technology company specializing in innovative solutions'
        ]);

        User::create([
            'name' => 'Startup Inc',
            'email' => 'hr@startup.com',
            'password' => Hash::make('password'),
            'role' => 'employer',
            'company_name' => 'Startup Inc',
            'bio' => 'Fast-growing startup in the fintech space'
        ]);

        // Create developer users
        User::create([
            'name' => 'John Developer',
            'email' => 'john@developer.com',
            'password' => Hash::make('password'),
            'role' => 'developer',
            'bio' => 'Full-stack developer with 5 years of experience'
        ]);

        User::create([
            'name' => 'Sarah Coder',
            'email' => 'sarah@coder.com',
            'password' => Hash::make('password'),
            'role' => 'developer',
            'bio' => 'Backend developer specializing in Python and Django'
        ]);
    }
}
