<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Survey', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('q1');
            $table->boolean('q2');
            $table->boolean('q3');
            $table->boolean('q4');
            $table->boolean('q5');
            $table->boolean('q6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Survey');
    }
}
