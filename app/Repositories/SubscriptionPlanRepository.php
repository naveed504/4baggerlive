<?php
namespace App\Repositories;

use Exception;
use App\Http\Controllers\Controller;
use App\Models\subscription\SubscriptionPaymentPlan;


class SubscriptionPlanRepository
{
    protected $payment;

    public function __construct(Controller $parent)
    {
        $this->parent = $parent;
    }

    public function savePaymentTransactionInToDB($tresponse, $input)
    {
        
        SubscriptionPaymentPlan::create([
            'subscription_plans_id' => $input['subscription_plans_id'],
            'user_id' => $input['userId'],
            'subscription_amount' => $input['amount'],
            'payment_status' => 1,
            'transaction_no' => $tresponse->getTransId(),
            'expiry_date'   => '2021-10-01 13:39:29',
        ]);

        return true ;
       
    }
}