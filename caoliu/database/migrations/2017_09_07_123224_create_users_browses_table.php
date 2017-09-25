<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersBrowsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_browses', function (Blueprint $table) {
            $table->increments('users_browses_id');
            $table->integer('users_id');
            $table->integer('goods_id');
            $table->string('goods_pic');
            $table->string('goods_name');
            $table->string('goods_url');
            $table->tinyInteger('goods_status');
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
        Schema::dropIfExists('users_browses');
    }
}
