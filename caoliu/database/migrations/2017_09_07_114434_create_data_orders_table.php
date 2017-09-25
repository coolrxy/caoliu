<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_orders', function (Blueprint $table) {
            $table->increments('data_orders_id');
            $table->integer('orders_id');
            $table->integer('orders_receiver_id');
            $table->string('orders_completion_time');
            $table->decimal('orders_price',7,2);
            $table->integer('goods_id');
            $table->string('orders_delivery_address');
            $table->tinyInteger('orders_comment_status');

//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_orders');
    }
}
