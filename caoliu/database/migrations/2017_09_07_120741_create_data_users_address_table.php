<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUsersAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_users_address', function (Blueprint $table) {
            $table->increments('addres_id');
            $table->integer('users_id');
            $table->string('addres_name');
            $table->string('addres_phone');
            $table->string('addres_province');
            $table->string('addres_city');
            $table->string('addres_town');
            $table->string('addres_details');
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
        Schema::dropIfExists('data_users_address');
    }
}
