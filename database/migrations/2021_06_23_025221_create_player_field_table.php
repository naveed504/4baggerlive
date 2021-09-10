<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_field', function (Blueprint $table) {
            $table->id();
            $table->integer('assists')->length(11);
            $table->integer('catcher_interference')->length(11);
            $table->integer('double_plays')->length(11);
            $table->float('fielding_percentage')->length(11);
            $table->integer('innings')->length(11);
            $table->integer('passed_ball')->length(11);
            $table->integer('put_out')->length(11);
            $table->integer('errors')->length(11);
            $table->integer('total_chances')->length(11);
            $table->integer('triple_play')->length(11);
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
        Schema::dropIfExists('player_field');
    }
}
