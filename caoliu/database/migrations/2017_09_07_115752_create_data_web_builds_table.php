<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataWebBuildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_web_builds', function (Blueprint $table) {
            $table->increments('data_web_builds_id');
            $table->tinyInteger('web_builds_type');
            $table->string('data_web_builds_content');
            $table->string('data_web_builds_time');
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
        Schema::dropIfExists('data_web_builds');
    }
}
