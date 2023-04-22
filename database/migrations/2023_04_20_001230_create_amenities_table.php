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
            $table->string('garage')->nullable()->default(false);
            $table->string('yard')->nullable()->default(false);
            $table->string('surveillance')->nullable()->default(false);
            $table->string('balcon')->nullable()->default(false);
            $table->string('wifi')->nullable()->default(false);
            $table->string('security')->nullable()->default(false);
            $table->string('elevator')->nullable()->default(false);
            $table->string('furnished')->nullable()->default(false);
            $table->string('kitchenReady')->nullable()->default(false);
            $table->string('swimingPool')->nullable()->default(false);
            $table->string('airConditioner')->nullable()->default(false);
            $table->string('babiesBedroom')->nullable()->default(false);
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
