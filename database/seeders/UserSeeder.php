<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Nico Flassy',
            'email' => 'nikoflassy@gmail.com',
            'password' => bcrypt('nico123'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Jane Doe',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'role' => 'user',
        ]);
        
    }
}