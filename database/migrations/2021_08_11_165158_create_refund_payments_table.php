<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_register_team_id')->unsigned();
            $table->foreign('event_register_team_id')->references('id')->on('event_register_teams');
            $table->string('refund_transaction_no');
            $table->float('refund_amount');
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
        Schema::dropIfExists('refund_payments');
    }
}
