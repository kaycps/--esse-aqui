<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfileHasSpecialNeed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_special_need', function (Blueprint $table) {
            $table->integer('profile_id')->unsigned();
            $table->foreign('profile_id')->references('id')->on('profiles'); 
         
            $table->integer('special_need_id')->unsigned();
            $table->foreign('special_need_id')->references('id')->on('special_needs');

            $table->boolean('permanente')->nullable();
            $table->string('observação')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         $table->dropForeign(['profile_id']);
         $table->dropForeign(['special_need_id']);
    }
}
