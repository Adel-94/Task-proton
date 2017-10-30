<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeletePropertiesPropTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('prop_types', function($table) {
         $table->dropColumn('prop_price');
         $table->dropColumn('prop_area');
         $table->dropColumn('prop_quantity');
         $table->dropColumn('indicators');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    Schema::table('prop_types', function($table) {
         $table->integer('prop_price');
         $table->integer('prop_area');
         $table->integer('prop_quantity');
         $table->integer('indicators');
    });
    }
}
