<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersCollectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_collects', function (Blueprint $table) {
            $table->increments('users_collect_id');
            $table->integer('users_id');
            $table->integer('goods_id');
            $table->string('goods_pic');
            $table->decimal('goods_ price',7,2);
            $table->string('goods_name');
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
        Schema::dropIfExists('users_collects');
    }
}
