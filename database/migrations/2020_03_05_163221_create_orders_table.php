<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->string('customer_name')->nullable();
            $table->integer('item_id')->unsigned();
            $table->string('item_code')->nullable();
            $table->date('orderd_date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->string('Location_address')->nullable();
            $table->integer('city_code')->unsigned();
            $table->string('deliverd')->nullable();
            $table->integer('quantity')->nullable();
            $table->double('totalCost')->nullable();
            $table->foreign('item_id')->references('id')->on('items')->sign;
            $table->foreign('city_code')->references('id')->on('citys')->sign;
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
