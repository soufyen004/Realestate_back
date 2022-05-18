<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AnnouncementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('announcements')->insert([
            'city' => 'rabat',
            'price' => '10000',
            'bathrooms' => '3',
            'aminities' => 'test',
            'propertystatus' => 'reday',
            'propertytype' => 'for sell',
            'bedrooms' => '2',
            'sqft' => '300',
            'neighborhood'=> 'schools',
            'bhk' => '4',
            'rating' => '3',
            'listingType' => 'test',
        ]);
    }
}
