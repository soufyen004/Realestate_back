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
            'city' => 'agadir',
            'price' => '86000',
            'bathrooms' => '3',
            'aminities' => 'all',
            'announcementStatus' => 'for sell',
            'bedrooms' => '1',
            'sqft' => '120',
            'neighborhood'=> 'avenue hassan 2',
            'bhk' => '3',
            'rating' => '4',
            'propertyType' => 'House',
            'cover_image' => 'default.png',
            'propertyStatus' => 'Ready to move'

        ]);
        DB::table('announcements')->insert([
            'city' => 'rabat',
            'price' => '100000',
            'bathrooms' => '3',
            'aminities' => 'all',
            'announcementStatus' => 'for sell',
            'bedrooms' => '2',
            'sqft' => '300',
            'neighborhood'=> 'avenue hassan 2',
            'bhk' => '4',
            'rating' => '3',
            'propertyType' => 'House',
            'cover_image' => 'default.png',
            'propertyStatus' => 'Furnished'

        ]);
        DB::table('announcements')->insert([
            'city' => 'casablanca',
            'price' => '150000',
            'bathrooms' => '2',
            'aminities' => 'all',
            'announcementStatus' => 'for sell',
            'bedrooms' => '2',
            'sqft' => '230',
            'neighborhood'=> 'avenue hassan 2',
            'bhk' => '2',
            'rating' => '5',
            'propertyType' => 'House',
            'cover_image' => 'default.png',
            'propertyStatus' => 'Furnished'

        ]);
        DB::table('announcements')->insert([
            'city' => 'casablanca',
            'price' => '150000',
            'bathrooms' => '2',
            'aminities' => 'all',
            'announcementStatus' => 'for rent',
            'bedrooms' => '2',
            'sqft' => '230',
            'neighborhood'=> 'avenue hassan 2',
            'bhk' => '2',
            'rating' => '5',
            'propertyType' => 'House',
            'cover_image' => 'default.png',
            'propertyStatus' => 'Furnished'

        ]);
        DB::table('announcements')->insert([
            'city' => 'casablanca',
            'price' => '179000',
            'bathrooms' => '1',
            'aminities' => 'all',
            'announcementStatus' => 'for rent',
            'bedrooms' => '2',
            'sqft' => '270',
            'neighborhood'=> 'avenue hassan 2',
            'bhk' => '3',
            'rating' => '5',
            'propertyType' => 'House',
            'cover_image' => 'default.png',
            'propertyStatus' => 'Furnished'

        ]);
    }
}
