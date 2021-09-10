<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerBatModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_bat_models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('innings')->length(11);
            $table->string('single')->nullable();
            $table->string('doubles')->nullable();
            $table->string('triple')->nullable();
            $table->string('at_bat')->nullable();
            $table->string('at_bats_per_homerun')->nullable();
            $table->string('batting_avg')->nullable();
            $table->string('base_on_balls')->nullable();
            $table->string('walk_to_strikeout_ratio')->nullable();
            $table->string('base_runs')->nullable();
            $table->string('gross_production_avg')->nullable();
            $table->string('grand_slam')->nullable();
            $table->string('hit')->nullable();
            $table->string('hit_by_pitch')->nullable();
            $table->string('home_runs')->nullable();
            $table->string('home_runs_per_hit')->nullable();
            $table->string('strikeout')->nullable();
            $table->string('left_on_base')->nullable();
            $table->string('on_base_percentage')->nullable();
            $table->string('runs_scored')->nullable();
            $table->string('runs_created')->nullable();
            $table->string('runs_produced')->nullable();
            $table->string('runs_batted_in')->nullable();
            $table->string('total_avg')->nullable();
            $table->string('total_bases')->nullable();
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
        Schema::dropIfExists('player_bat_models');
    }
}
