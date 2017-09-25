<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataUsersComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_users_complaints', function (Blueprint $table) {
            $table->increments('complaint_id');
            $table->integer('complainant_id');
            $table->string('complaint_conten');
            $table->tinyInteger('complaint_type');
            $table->integer('respondent_id');
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
        Schema::dropIfExists('data_users_complaints');
    }
}
