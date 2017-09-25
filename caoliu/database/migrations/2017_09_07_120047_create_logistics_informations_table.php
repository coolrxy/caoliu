<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogisticsInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logistics_informations', function (Blueprint $table) {
            $table->increments('logistics_informations_id');
            $table->integer('orders_id');
            $table->integer('users_id');
            $table->string('logistics_informations_content');
            $table->string('logistics_informations_update_time');
            $table->integer('goods_id');
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
        Schema::dropIfExists('logistics_informations');
    }
}
