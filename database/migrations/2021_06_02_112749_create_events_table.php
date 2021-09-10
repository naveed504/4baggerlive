<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('event_name');
            $table->string('total_matches');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('age_restriction');
            $table->string('graduation_restriction');
            $table->string('allowed_bats');
            $table->string('event_city');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade')->onUpdate('cascade');
            $table->string('event_venue');
            $table->float('entry_fee');
            $table->string('event_format');
            $table->string('event_summary');
            $table->string('event_logo');
            $table->float('gate_fee');
            $table->string('eventclassification');
            $table->tinyInteger('approved')->default(0)->comment("0 for Unapproved, 1 for approved");
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
        Schema::dropIfExists('events');
    }
}
