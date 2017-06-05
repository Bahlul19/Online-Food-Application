<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->increments('reviewID');
            $table->integer('customerID')->unsigned()->index();
            $table->foreign('customerID')->references('customerID')->on('customer')->onDelete('cascade')->omUpdate('No Action');
            $table->integer('foodItemID')->unsigned()->index();
            $table->foreign('foodItemID')->references('foodItemID')->on('foodItem')->onDelete('cascade')->omUpdate('No Action');
            $table->integer('rating')->default(1); //food rating by the user
            $table->string('comment')->nullable(); //usercomment about food
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
        Schema::drop('review');
    }
}