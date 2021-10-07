<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAgeGroupToEventRegisterTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_register_teams', function (Blueprint $table) {
            $table->unsignedBigInteger('age_group_id')->unsigned()->after('team_id');
            $table->foreign('age_group_id')->references('id')->on('age_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_register_teams', function (Blueprint $table) {
            //
        });
    }
}
