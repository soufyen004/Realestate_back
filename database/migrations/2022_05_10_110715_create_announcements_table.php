<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('cover_image');
            $table->string('city');
            $table->integer('price');
            $table->integer('bathrooms');
            $table->string('aminities');
            $table->string('propertystatus');
            $table->string('propertytype');
            $table->integer('bedrooms');
            $table->integer('sqft');
            $table->string('neighborhood');
            $table->integer('bhk');
            $table->integer('rating');
            $table->string('listingType');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announcements');
    }
}
