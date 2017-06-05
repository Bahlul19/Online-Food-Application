<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderItem', function (Blueprint $table) {
            $table->increments('orderItemID');
            $table->integer('foodItemID')->unsigned()->index();
            $table->foreign('foodItemID')->references('foodItemID')->on('foodItem')->onDelete('cascade')->omUpdate('No Action');
            $table->integer('orderID')->unsigned()->index();
            $table->foreign('orderID')->references('orderID')->on('order')->onDelete('cascade')->omUpdate('No Action');
            $table->integer('quantity')->default(0);
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
        Schema::drop('orderItem');
    }
}
