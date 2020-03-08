<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRejectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rejects', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->integer('order_id')->unsigned();
            $table->date('rijected_date')->nullable();
            $table->integer('item_id')->unsigned();
            $table->string('quantity')->nullable();
            $table->foreign('order_id')->references('id')->on('orders')->sign;
            $table->foreign('item_id')->references('id')->on('items')->sign;
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rejects');
    }
}
