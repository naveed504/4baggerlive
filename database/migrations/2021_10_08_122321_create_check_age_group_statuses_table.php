<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckAgeGroupStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_age_group_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('age_group_id')->unsigned()->nullable();
            $table->foreign('age_group_id')->references('id')->on('age_groups');
            $table->unsignedBigInteger('event_id')->unsigned()->nullable();
            $table->foreign('event_id')->references('id')->on('events');
            $table->enum('status', ['open', 'close'])->default('open');
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
        Schema::dropIfExists('check_age_group_statuses');
    }
}
