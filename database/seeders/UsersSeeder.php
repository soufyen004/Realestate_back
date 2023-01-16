<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'status' => 'active',
        ]);
        DB::table('users')->insert([
            'name' => 'amine berdaa',
            'email' => 'proagent@admin.com',
            'password' => Hash::make('password'),
            'role' => 'proagent',
            'status' => 'active',
        ]);
        DB::table('users')->insert([
            'name' => 'kamal ouakil',
            'email' => 'proagent2@admin.com',
            'password' => Hash::make('password'),
            'role' => 'proagent',
            'status' => 'active',
        ]);
        DB::table('users')->insert([
            'name' => 'akram waedi',
            'email' => 'proagent4@admin.com',
            'password' => Hash::make('password'),
            'role' => 'proagent',
            'status' => 'active',
        ]);
        DB::table('users')->insert([
            'name' => 'ikram asmae',
            'email' => 'proagent5@admin.com',
            'password' => Hash::make('password'),
            'role' => 'proagent',
            'status' => 'active',
        ]);
    }
}
