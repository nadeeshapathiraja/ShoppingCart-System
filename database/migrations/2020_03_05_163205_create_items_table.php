<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('item_code')->nullable();
            $table->double('price')->nullable();
            $table->string('photo')->nullable();
            $table->string('order_type')->nullable();
            $table->string('colour')->nullable();
            $table->integer('quantity')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}
