<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;   Schema::table('adverts', function($table) {
         $table->dropColumn('author_id');
 
    });
use Illuminate\Database\Migrations\Migration;

class DeleteForeignkeyAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

 
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {  
      
      Schema::table('adverts', function($table) {

        $table->integer('author_id')->unsigned();

        });
    }
}
