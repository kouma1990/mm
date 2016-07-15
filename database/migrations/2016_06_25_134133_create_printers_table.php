<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        // 外部キーの設定
        Schema::table('mastes', function ($table) {
            $table->foreign('printer_id')->references('id')->on('printers')->onUpdate('cascade')->onDelete('restrict');
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
            $table->dropForeign('mastes_printer_id_foreign');
        });
        Schema::drop('printers');
    }
}
