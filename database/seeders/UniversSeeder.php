<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('univers')->insert([
            "name"=>"HOMELIST",
            "color" => '#dc3545',
            "description" => "previously owned houses",
            "type_id" =>1
        ]);

        DB::table('univers')->insert([
            "name"=>"PREMIUMLIST",
            "color" => "#e1ad01",
            "description" => "new realestate",
            "type_id" =>6

        ]);

        DB::table('univers')->insert([
            "name"=>"BOOKLIST",
            "color" => "#FF7034",
            "description" => "vacation homes",
            "type_id" =>2


        ]);

        DB::table('univers')->insert([
            "name"=>"LANDLIST",
            "color" => "#198759",
            "description" => "pieces of land",
            "type_id" =>3

        ]);

        DB::table('univers')->insert([
            "name"=>"OFFICELIST",
            "color" => "#0d6eca",
            "description" => "realestate offices",
            "type_id" =>4

        ]);

        DB::table('univers')->insert([
            "name"=>"BUSINESSLIST",
            "color" => "#610646",
            "description" => "commercial premises",
            "type_id" =>5

        ]);

    }
}
