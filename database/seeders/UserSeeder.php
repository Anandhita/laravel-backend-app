<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();

        User::create([
            'name' => 'Anandhita',
            'email' => 'anandhitaplank@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => Hash::make('password'),
            'phone' => '081325771840',
            'bio' => 'laravel 6'
        ]);

        User::create([
            'name' => 'administrator',
            'email' => 'administrator@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'password' => Hash::make('password'),
            'phone' => '085700904832',
            'bio' => 'laravel 5',
        ]);
    }
}
