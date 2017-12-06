<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SelectProcessHasQuota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('quotum_select_process', function (Blueprint $table) {
            $table->integer('quotum_id')->unsigned();
            $table->foreign('quotum_id')->references('id')->on('quotums'); 
         
            $table->integer('select_process_id')->unsigned();
            $table->foreign('select_process_id')->references('id')->on('select_processes');
            
            $table->integer('vagas')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['quotum_id']);
        $table->dropForeign(['select_process_id']);
       
    }
}
