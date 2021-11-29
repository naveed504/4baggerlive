<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablePlayerBatStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_bat_stats', function (Blueprint $table) {
            $table->renameColumn('1b', 'one_b');
            $table->renameColumn('2b', 'two_b');
            $table->renameColumn('3b', 'three_b');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('player_bat_stats', function (Blueprint $table) {
            $table->renameColumn('one_b' ,'1b');
            $table->renameColumn('two_b', '2b');
            $table->renameColumn('three_b', '3b');
        });
    }
}
