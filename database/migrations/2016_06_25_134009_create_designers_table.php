<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        // 外部キーの設定
        Schema::table('mastes', function ($table) {
            $table->foreign('designer_id')->references('id')->on('designers')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mastes', function($table) {
            $table->dropForeign('mastes_designer_id_foreign');
        });
        Schema::drop('designers');
    }
}
