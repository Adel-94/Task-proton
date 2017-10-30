<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('adv_type_id')->unsigned();
            $table->integer('prop_type_id')->unsigned();
            $table->integer('authorr_id')->unsigned();
            $table->timestamps();
            $table->foreign('adv_type_id')->references('id')->on('advert_types');
            $table->foreign('prop_type_id')->references('id')->on('prop_types');
            $table->foreign('authorr_id')->references('id')->on('author');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adverts');
    }
}
