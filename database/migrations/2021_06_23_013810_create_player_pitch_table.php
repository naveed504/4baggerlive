<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerPitchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_pitch', function (Blueprint $table) {
            $table->id();
            $table->integer('games_played')->length(11);
            $table->integer('games_started')->length(11);
            $table->float('complete_games')->length(11);
            $table->integer('shut_out')->length(11);
            $table->integer('innings_pitched')->length(11);
            $table->integer('hits')->length(11);
            $table->integer('runs')->length(11);
            $table->float('earned_runs')->length(11);
            $table->integer('home_runs')->length(11);
            $table->integer('base_on_balls')->length(11);
            $table->integer('strike_out')->length(11);
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('player_pitch');
    }
}
