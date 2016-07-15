<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mastes', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->integer('designer_id')->unsigned();
            $table->integer('printer_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->integer('repository_id')->unsigned();

            $table->integer('purchased_year')->unsigned();
            $table->integer('purchased_month')->unsigned();
            $table->integer('purchased_day')->unsigned();

            /*
            $table->string('theme');
            $table->string('color');



            */

            $table->integer('price');
            $table->integer('number');
            $table->integer('number_open');

            $table->boolean('trade_flag');
            $table->boolean('limit_flag');

            $table->string('note');
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
        //
        Schema::drop('mastes');
    }
}
