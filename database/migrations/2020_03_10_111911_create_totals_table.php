<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTotalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('totals', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->integer('order_id')->nullable()->unsigned();
            $table->integer('item_id')->nullable()->unsigned();
            $table->integer('city_id')->nullable()->unsigned();
            $table->double('total_price')->nullable();
            $table->foreign('order_id')->references('id')->on('orders')->sign;
            $table->foreign('item_id')->references('id')->on('items')->sign;
            $table->foreign('city_id')->references('id')->on('citys')->sign;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('totals');
    }
}
