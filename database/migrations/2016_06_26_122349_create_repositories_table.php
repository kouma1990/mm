<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepositoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        // 外部キーの設定
        Schema::table('mastes', function ($table) {
            $table->foreign('repository_id')->references('id')->on('repositories')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mastes', function ($table) {
            $table->dropForeign('mastes_repository_id_foreign');
        });
        Schema::drop('repositories');
    }
}
