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
            'user_id'=>1,
            'title'=>'Appartement a agadir',
            'city' => 'agadir',
            'price' => '186000',
            'bathrooms' => '3',
            'bedrooms' => '1',
            'sqft' => '120',
            'neighborhood'=> 'avenue hassan 2',
            'propertyType' => 'House',
            'cover_image' => 'default.png',
            'propertyStatus' => 'Ready to move',
            'annoncementType'=> 'for rent',
            'annoncementStatus'=> 1,
        ]);

        DB::table('announcements')->insert([
            'user_id'=>2,
            'title'=>'Appartement a casablanca',
            'city' => 'casablanca',
            'price' => '451000',
            'bathrooms' => '3',
            'bedrooms' => '1',
            'sqft' => '115',
            'neighborhood'=> 'av ouarat 2',
            'propertyType' => 'House',
            'cover_image' => 'default.png',
            'propertyStatus' => 'Ready to move',
            'annoncementType'=> 'for rent',
            'annoncementStatus'=> 1,
        ]);
        DB::table('announcements')->insert([
            'user_id'=>1,
            'cover_image'=>'default.png',
            'title'=>'Appartement a tanger',
            'city' => 'tanger',
            'price' => '86000',
            'bathrooms' => '3',
            'bedrooms' => '1',
            'sqft' => '100',
            'neighborhood'=> 'bani makada',
            'propertyType' => 'House',
            'cover_image' => 'default.png',
            'propertyStatus' => 'Ready to move',
            'annoncementType'=> 'for rent',
            'annoncementStatus'=> 1,
        ]);
    }
}
