<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('univers', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('type_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->string('color');
            $table->boolean('active')->unsigned()->nullable()->default(true);
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('annoncements_types')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('univers');
    }
}
