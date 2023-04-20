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
            $table->string('garage');
            $table->string('yard');
            $table->string('surveillance');
            $table->string('balcon');
            $table->string('wifi');
            $table->string('security');
            $table->string('elevator');
            $table->string('furnished');
            $table->string('kitchenReady');
            $table->string('swimingPool');
            $table->string('airConditioner');
            $table->string('babiesBedroom');
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
