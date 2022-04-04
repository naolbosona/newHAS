<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('agent_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string("isSell")->boolean();
            $table->string("isHouse")->boolean();
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
            $table->string("isActive")->boolean()->default(0);
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
        Schema::dropIfExists('properties');
    }
}
