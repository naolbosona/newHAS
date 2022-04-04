<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->string("price")->nullable();
            $table->string("location")->nullable();
            $table->string("state")->nullable();
            $table->string("housetype")->nullable();
            $table->string("phone_number")->nullable();
            $table->string("commission_fee")->nullable();
            $table->string("size_of_land")->nullable();
            $table->string("image")->nullable();
            $table->string("description")->nullable();
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
        Schema::dropIfExists('lands');
    }
}
