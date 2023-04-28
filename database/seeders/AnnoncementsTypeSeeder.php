<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnoncementsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annoncements_types')->insert([
            "name"=>"apartment",
            "universName"=>"homelist",
            "universId"=> 1
        ]);

        DB::table('annoncements_types')->insert([
            "name"=>"apartment",
            "universName"=>"premiumlist",
            "universId"=> 6
        ]);

        DB::table('annoncements_types')->insert([
            "name"=>"villa",
            "universName"=>"homelist",
            "universId"=> 1
        ]);

        DB::table('annoncements_types')->insert([
            "name"=>"studio",
            "universName"=>"homelist",
            "universId"=> 1
        ]);

        DB::table('annoncements_types')->insert([
            "name" => "house",
            "universName"=>"homelist",
            "universId"=> 1
        ]);

        DB::table('annoncements_types')->insert([
            "name"=> "agricultural land",
            "universName"=>"landlist",
            "universId"=> 3
        ]);

        DB::table('annoncements_types')->insert([
            "name"=> "bare ground",
            "universName"=>"landlist",
            "universId"=> 3
        ]);
        DB::table('annoncements_types')->insert([
            "name" => "local commerciall",
            "universName"=>"businesslist",
            "universId"=> 5
        ]);
        DB::table('annoncements_types')->insert([
           "name" => "warehouse",
           "universName"=>"businesslist",
           "universId"=> 5
        ]);

        DB::table('annoncements_types')->insert([
            "name"=>"riad",
            "universName"=>"homelist",
            "universId"=> 1
        ]);

        DB::table('annoncements_types')->insert([
            "name"=> "farm",
            "universName"=>"landlist",
            "universId"=> 3
        ]);
    }
}
