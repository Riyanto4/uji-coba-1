<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed a sample user
        DB::table('users')->insert([
            'username' => 'yanto',
            'password' => Hash::make('123456'),
        ]);

        // Add additional users as needed
    }
}
