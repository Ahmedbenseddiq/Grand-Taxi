<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
            ],
            [
                'name' => 'driver',
                'email' => 'driver@example.com',
                'password' => bcrypt('12345678'),
                'role' => 'driver',
            ],
            [
                'name' => 'client',
                'email' => 'client@example.com',
                'password' => bcrypt('12345678'),
                'role' => 'client',
            ],
        ]);
    }
}
