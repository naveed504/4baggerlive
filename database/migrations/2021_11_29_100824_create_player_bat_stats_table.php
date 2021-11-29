<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerBatStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_bat_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('season');
            $table->string('matches');
            $table->string('innings');
            $table->string('1b');
            $table->string('2b');
            $table->string('3b');
            $table->string('ab');
            $table->string('ab_hr');
            $table->string('ba');
            $table->string('bb');
            $table->string('bb_k');
            $table->string('bsr');
            $table->string('gpa');
            $table->string('gs');
            $table->string('h');
            $table->string('hbp');
            $table->string( 'hr');
            $table->string( 'k');
            $table->string('lob');
            $table->string('obp');
            $table->string('r');
            $table->string('rc');
            $table->string('rp');
            $table->string('rbi');
            $table->string('ta');
            $table->string('tb');   
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
        Schema::dropIfExists('player_bat_stats');
    }
}
