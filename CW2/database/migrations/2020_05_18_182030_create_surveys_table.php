<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /** Create the surveys table, with the fields of:
         * surveyid as an increment
         * title as a string
         * description as a string
         * liveStatus as a boolean
         */
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('surveyid');
            $table->string('title');
            $table->string('description');
            $table->boolean('liveStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('surveys');
    }
}
