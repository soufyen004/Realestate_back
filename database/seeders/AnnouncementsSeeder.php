<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'id' => 1,
            'user_id'=>1,
            'title'=>'Appartement a agadir',
            'description'=>'Appartement a agadir Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum hic neque quisquam commodi quibusdam consequuntur facilis temporibus ad ipsam. Aut repellat voluptatum temporibus sit ab corrupti commodi excepturi consequatur iusto quasi perferendis autem ducimus facere earum ex sed consequuntur, quia, cupiditate dolor accusantium saepe reprehenderit molestias asperiores! A, minima explicabo!',
            'region' => 'Rabat-Salé-Kénitra',
            'price' => '186000',
            'bathrooms' => '3',
            'bedrooms' => '1',
            'sqft' => '120',
            'common'=> 'sale',
            'propertyType' => 'House',
            'annoncements_type_id'=>4,
            'cover_image' => 'default.jpg',
            'propertyStatus' => 'Ready to move',
            'annoncementType'=> 'for rent',
            'annoncementStatus'=> 1,
        ]);

        DB::table('announcements')->insert([
            'id' => 2,
            'user_id'=>2,
            'title'=>'Appartement a casablanca',
            'description'=>'Appartement a casablanca Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum hic neque quisquam commodi quibusdam consequuntur facilis temporibus ad ipsam. Aut repellat voluptatum temporibus sit ab corrupti commodi excepturi consequatur iusto quasi perferendis autem ducimus facere earum ex sed consequuntur, quia, cupiditate dolor accusantium saepe reprehenderit molestias asperiores! A, minima explicabo!',
            'region' => 'Casablanca-Settat',
            'price' => '451000',
            'bathrooms' => '3',
            'bedrooms' => '1',
            'sqft' => '115',
            'common'=> 'maarif',
            'propertyType' => 'House',
            'annoncements_type_id'=>4,
            'cover_image' => 'default.jpg',
            'propertyStatus' => 'Ready to move',
            'annoncementType'=> 'for rent',
            'annoncementStatus'=> 1,
        ]);
        DB::table('announcements')->insert([
            'id' => 3,
            'user_id'=>1,
            'cover_image'=>'default.jpg',
            'title'=>'Appartement a tanger',
            'description'=>'Appartement a tanger Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum hic neque quisquam commodi quibusdam consequuntur facilis temporibus ad ipsam. Aut repellat voluptatum temporibus sit ab corrupti commodi excepturi consequatur iusto quasi perferendis autem ducimus facere earum ex sed consequuntur, quia, cupiditate dolor accusantium saepe reprehenderit molestias asperiores! A, minima explicabo!',
            'region'=> 'Tanger-Tetouan-Al Hoceima',
            'price' => '86000',
            'bathrooms' => '3',
            'bedrooms' => '1',
            'sqft' => '100',
            'common'=> 'bani makada',
            'propertyType' => 'House',
            'annoncements_type_id'=>4,
            'cover_image' => 'default.jpg',
            'propertyStatus' => 'Ready to move',
            'annoncementType'=> 'for rent',
            'annoncementStatus'=> 1,
        ]);

        DB::table('announcements')->insert([
            'id' => 4,
            'user_id'=>2,
            'title'=>'piece of land a casablanca',
            'description'=>'Appartement a agadir Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum hic neque quisquam commodi quibusdam consequuntur facilis temporibus ad ipsam. Aut repellat voluptatum temporibus sit ab corrupti commodi excepturi consequatur iusto quasi perferendis autem ducimus facere earum ex sed consequuntur, quia, cupiditate dolor accusantium saepe reprehenderit molestias asperiores! A, minima explicabo!',
            'region' => 'Casablanca-Settat',
            'price' => '451000',
            'bathrooms' => '3',
            'bedrooms' => '1',
            'sqft' => '115',
            'common'=> 'av ouarat 2',
            'propertyType' => 'agricultural land',
            'annoncements_type_id'=>5,
            'cover_image' => 'default.jpg',
            'propertyStatus' => 'Ready to move',
            'annoncementType'=> 'for rent',
            'annoncementStatus'=> 1,
        ]);


        DB::table('announcements')->insert([
            'id' => 5,
            'user_id'=>1,
            'title'=>'appartement a salé',
            'description'=>'Appartement a salé Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum hic neque quisquam commodi quibusdam consequuntur facilis temporibus ad ipsam. Aut repellat voluptatum temporibus sit ab corrupti commodi excepturi consequatur iusto quasi perferendis autem ducimus facere earum ex sed consequuntur, quia, cupiditate dolor accusantium saepe reprehenderit molestias asperiores! A, minima explicabo!',
            'region' => 'Casablanca-Settat',
            'price' => '451000',
            'bathrooms' => '3',
            'bedrooms' => '1',
            'sqft' => '115',
            'common'=> 'av 20 aout',
            'propertyType' => 'agricultural land',
            'annoncements_type_id'=>5,
            'cover_image' => 'default.jpg',
            'propertyStatus' => 'Ready to move',
            'annoncementType'=> 'for rent',
            'annoncementStatus'=> 1,
        ]);
    }
}
