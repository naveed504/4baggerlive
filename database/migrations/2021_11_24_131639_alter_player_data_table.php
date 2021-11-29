<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPlayerDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_data', function (Blueprint $table) {
            $table->string('mlb_draft')->after('player_instagram')->nullable();
            $table->string('mlb_debuted')->after('mlb_draft')->nullable();
            $table->string('last_team_played')->after('mlb_debuted')->nullable();
            $table->string('national_ranking')->after('last_team_played')->nullable();
            $table->string('state_ranking')->after('national_ranking')->nullable();
            $table->string('best_grade')->after('state_ranking')->nullable();
            $table->string('profile_content')->after('best_grade')->nullable();          
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
        //
    }
}
