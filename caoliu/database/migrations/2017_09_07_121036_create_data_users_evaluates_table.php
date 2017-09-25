<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUsersEvaluatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_users_evaluates', function (Blueprint $table) {
            $table->increments('evaluate_id');
            $table->string('evaluate_content');
            $table->string('evaluate_sender_id');
            $table->string('evaluate_embracer_id');
            $table->string('evaluate_time');
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
        Schema::dropIfExists('data_users_evaluates');
    }
}
