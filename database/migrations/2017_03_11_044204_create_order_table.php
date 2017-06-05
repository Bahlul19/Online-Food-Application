<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('orderID');
            $table->string('customerMessage')->nullable();
            $table->string('orderStatus')->nullable()->default('pending');
            $table->float('payment')->nullable()->default(0);
            $table->string('payment_type')->nullable()->default('On Delivery');
            $table->integer('customerID')->unsigned()->index();
            $table->foreign('customerID')->references('customerID')->on('customer')->onDelete('cascade')->omUpdate('No Action');
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
        Schema::drop('order');
    }
}
