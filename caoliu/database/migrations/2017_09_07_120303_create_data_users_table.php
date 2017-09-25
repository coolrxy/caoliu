<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_users', function (Blueprint $table) {
            $table->increments('data_users_id');
            $table->string('users_email');
            $table->string('users_phone');
            $table->string('users_pic');
            $table->float('users_credit', 8, 2);
            $table->integer('users_integra');
            $table->string('users_nickname');
            $table->string('users_problem_1');
            $table->string('users_answer_1');
            $table->string('users_problem_2');
            $table->string('users_answer_2');
            $table->string('users_problem_3');
            $table->string('users_answer_3');
            $table->integer('users_id');
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
        Schema::dropIfExists('data_users');
    }
}
