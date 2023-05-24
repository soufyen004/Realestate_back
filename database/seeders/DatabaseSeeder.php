<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersSeeder::class);
        $this->call(AnnouncementsSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(AnnoncementsTypeSeeder::class);
        $this->call(UniversSeeder::class);
        $this->call(AmenitiesSeeder::class);
    }
}
