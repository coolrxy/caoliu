<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_goods', function (Blueprint $table) {
            $table->increments('data_goods_id');
            $table->integer('goods_data_id');
            $table->string('goods_pic');
            $table->longText('goods_describe');
            $table->decimal('goods_price',7,2);
            $table->integer('goods_pid');
            $table->integer('goods_type');
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
        Schema::dropIfExists('data_goods');
    }
}
