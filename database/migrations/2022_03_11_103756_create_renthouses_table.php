<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRenthousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renthouses', function (Blueprint $table) {
            $table->string("title")->nullable();
            $table->string("price")->nullable();
            $table->string("location")->nullable();
            $table->string("state")->nullable();
            $table->string("housetype")->nullable();
            $table->string("no_of_rooms")->nullable();
            $table->string("no_of_bedroom")->nullable();
            $table->string("no_of_kitchen")->nullable();
            $table->string("phone_number")->nullable();
            $table->string("commission_fee")->nullable();
            $table->string("size_of_house")->nullable();
            $table->string("image")->nullable();
            $table->string("description")->nullable();
            $table->id();
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
        Schema::dropIfExists('renthouses');
    }
}
