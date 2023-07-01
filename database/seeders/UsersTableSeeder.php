<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // admin
            [
                'name' => "Admin",
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345'),
                'role' => 'admin',
                'status' => 'active',
            ],

            // agent
            [
                'name' => "Agent",
                'username' => 'agent',
                'email' => 'agent@gmail.com',
                'password' => bcrypt(12345),
                'role' => 'agent',
                'status' => 'active',
            ],
            // user
            [
                'name' => "User",
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt(12345),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}
