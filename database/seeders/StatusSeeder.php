<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annoncement_statuses')->insert([
            "name" => "Furnished"
        ]);
        DB::table('annoncement_statuses')->insert([
            "name" => "Ready to move"
        ]);
        DB::table('annoncement_statuses')->insert([
            "name" => "Under construction"
        ]);
        DB::table('annoncement_statuses')->insert([
            "name" => "Semi furnished"
        ]);
        DB::table('annoncement_statuses')->insert([
            "name" => "Unfurnished"
        ]);

    }
}
