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
            $table->BigInteger('user_id')->unsigned();
            $table->string('title');
            $table->string('cover_image');
            $table->string('city');
            $table->integer('price');
            $table->integer('bathrooms');
            $table->string('propertyStatus');
            $table->string('propertytype');
            $table->integer('bedrooms');
            $table->integer('sqft');
            $table->string('neighborhood');
            $table->string('annoncementType');
            $table->integer('rating');
            $table->boolean('annoncementStatus')->nullable();
            $table->boolean('markedForRemove')->unsigned()->nullable()->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
