<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->string('date_of_birth');
            $table->string('p_city');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade')->onUpdate('cascade');
            $table->string('zip_code');
            $table->string('player_height');
            $table->string('parents_f_name');
            $table->string('parents_l_name');
            $table->string('parents_cell_number');
            $table->string('parents_email');
            $table->string('graduation_year');
            $table->string('player_weight');
            $table->string('school_name');
            $table->string('player_classification');
            $table->string('college_commitment');
            $table->string('player_throw');
            $table->string('player_bat');
            $table->string('primary_position');
            $table->string('secondary_position');
            $table->string('player_file');
            $table->string('player_facebook');
            $table->string('player_twitter');
            $table->string('player_instagram');
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
        Schema::dropIfExists('player_data');
    }
}
