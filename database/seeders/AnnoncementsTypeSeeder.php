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
            "id" => 1,
            "name"=>"apartment",
            "univers_name"=>"homelist",
            "univers_id"=> 1
        ]);

        // DB::table('annoncements_types')->insert([
        //     "id" => 2,
        //     "name"=>"apartment",
        //     "univers_name"=>"premiumlist",
        //     "univers_id"=> 6
        // ]);

        DB::table('annoncements_types')->insert([
            "id" => 2,
            "name"=>"villa",
            "univers_name"=>"homelist",
            "univers_id"=> 1
        ]);

        DB::table('annoncements_types')->insert([
            "id" => 3,
            "name"=>"studio",
            "univers_name"=>"homelist",
            "univers_id"=> 1
        ]);

        DB::table('annoncements_types')->insert([
            "id" => 4,
            "name" => "house",
            "univers_name"=>"homelist",
            "univers_id"=> 1
        ]);

        DB::table('annoncements_types')->insert([
            "id" => 5,
            "name"=> "agricultural land",
            "univers_name"=>"landlist",
            "univers_id"=> 4
        ]);

        DB::table('annoncements_types')->insert([
            "id" => 6,
            "name"=> "bare ground",
            "univers_name"=>"landlist",
            "univers_id"=> 3
        ]);
        DB::table('annoncements_types')->insert([
            "id" => 7,
            "name" => "local commerciall",
            "univers_name"=>"businesslist",
            "univers_id"=> 5
        ]);
        DB::table('annoncements_types')->insert([
            "id" => 8,
           "name" => "warehouse",
           "univers_name"=>"businesslist",
           "univers_id"=> 5
        ]);

        DB::table('annoncements_types')->insert([
            "id" => 9,
            "name"=>"riad",
            "univers_name"=>"homelist",
            "univers_id"=> 1
        ]);

        DB::table('annoncements_types')->insert([
            "id" => 10,
            "name"=> "farm",
            "univers_name"=>"landlist",
            "univers_id"=> 3
        ]);
    }
}
