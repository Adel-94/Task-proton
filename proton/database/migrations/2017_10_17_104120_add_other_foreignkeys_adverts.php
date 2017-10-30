<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOtherForeignkeysAdverts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('adverts', function (Blueprint $table) {
            $table->integer('distr_id')->unsigned()->nullable();
            $table->integer('station_id')->unsigned()->nullable();
            $table->integer('subway_id')->unsigned()->nullable();
            $table->foreign('distr_id')->references('id')->on('district');
            $table->foreign('station_id')->references('id')->on('stations');
            $table->foreign('subway_id')->references('id')->on('subwaysss');
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
    }
}
