<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodItem', function (Blueprint $table) {
            $table->increments('foodItemID');
            $table->string('foodName',160);quantity
            
            $table->string('foodDescription')->nullable();
            $table->double('price')->default(0);
            $table->string('foodTag')->nullable();
            $table->integer('restaurantID')->unsigned()->index();
            $table->foreign('restaurantID')->references('restaurantID')->on('restaurant')->onDelete('cascade')->omUpdate('No Action');
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
        Schema::drop('foodItem');
    }
}
