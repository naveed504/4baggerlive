<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSubscriptionPaymentPlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscription_payment_plans', function (Blueprint $table) {
            $table->string('transaction_no')->nullable()->after('payment_status');
            $table->date('expiry_date')->nullable()->after('transaction_no');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscription_payment_plans', function (Blueprint $table) {
            $table->dropColumn('transaction_no');
            $table->dropColumn('expiry_date');
        });
    }
}
