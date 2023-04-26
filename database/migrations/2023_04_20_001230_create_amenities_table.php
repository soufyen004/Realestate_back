<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->id();
            $table->integer('adId');
            $table->boolean('garage')->default(0);
            $table->boolean('yard')->default(0);
            $table->boolean('surveillance')->default(0);
            $table->boolean('balcon')->default(0);
            $table->boolean('wifi')->default(0);
            $table->boolean('security')->default(0);
            $table->boolean('elevator')->default(0);
            $table->boolean('furnished')->default(0);
            $table->boolean('kitchenReady')->default(0);
            $table->boolean('swimingPool')->default(0);
            $table->boolean('airConditioner')->default(0);
            $table->boolean('babiesBedroom')->default(0);
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
        Schema::dropIfExists('amenities');
    }
}
