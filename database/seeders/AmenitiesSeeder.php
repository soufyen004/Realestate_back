<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('amenities')->insert([
            'adId' => 1,
            'garage'=> 1,
            'balcon'=>1,
            'yard'=>1,
            'surveillance'=>1,
            'wifi'=>0,
            'security'=>0,
            'furnished'=>0,
            'elevator'=>1,
            'kitchenReady'=>0,
            'swimingPool'=>1,
            'airConditioner'=>1,
            'babiesBedroom'=>0,
        ]);

        DB::table('amenities')->insert([
            'adId' => 2,
            'garage'=> 1,
            'balcon'=>0,
            'yard'=>1,
            'surveillance'=>1,
            'wifi'=>0,
            'security'=>1,
            'furnished'=>1,
            'elevator'=>1,
            'kitchenReady'=>0,
            'swimingPool'=>1,
            'airConditioner'=>1,
            'babiesBedroom'=>1
        ]);

        DB::table('amenities')->insert([
            'adId' => 3,
            'garage'=> 0,
            'balcon'=>0,
            'yard'=>1,
            'surveillance'=>1,
            'wifi'=>0,
            'security'=>0,
            'furnished'=>0,
            'elevator'=>1,
            'kitchenReady'=>1,
            'swimingPool'=>1,
            'airConditioner'=>1,
            'babiesBedroom'=>0,
        ]);

        DB::table('amenities')->insert([
            'adId' => 4,
            'garage'=> 1,
            'balcon'=>0,
            'yard'=>0,
            'surveillance'=>1,
            'wifi'=>0,
            'security'=>1,
            'furnished'=>0,
            'elevator'=>1,
            'kitchenReady'=>0,
            'swimingPool'=>1,
            'airConditioner'=>0,
            'babiesBedroom'=>0,
        ]);

        DB::table('amenities')->insert([
            'adId' => 5,
            'garage'=> 0,
            'balcon'=>1,
            'yard'=>1,
            'surveillance'=>0,
            'wifi'=>0,
            'security'=>0,
            'furnished'=>0,
            'elevator'=>1,
            'kitchenReady'=>1,
            'swimingPool'=>1,
            'airConditioner'=>1,
            'babiesBedroom'=>0,
        ]);
    }
}
