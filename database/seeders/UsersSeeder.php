<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            'name' => 'soufyen',
            'email' => 'soufyen@mail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
