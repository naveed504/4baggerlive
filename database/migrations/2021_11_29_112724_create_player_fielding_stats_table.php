<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerFieldingStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_fielding_stats', function (Blueprint $table) {
           
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('season');
            $table->string('matches');
            $table->string('innings');
            $table->string('a');
            $table->string('ci');
            $table->string('db');
            $table->string('fp');
            $table->string('pb');
            $table->string('po');
            $table->string('e');
            $table->string('tc');
            $table->string('tp'); 
            $table->softDeletes();          
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
        Schema::dropIfExists('player_fielding_stats');
    }
}
