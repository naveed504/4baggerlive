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
        $no_of_days = $input['plantype'] * 30;
        $expirydate=Date('y:m:d H:i:s', strtotime('+' .$no_of_days. 'days'));      
       
        SubscriptionPaymentPlan::create([
            'subscription_plans_id' => $input['subscription_plans_id'],
            'user_id' => $input['userId'],
            'subscription_amount' => $input['amount'],
            'payment_status' => 1,
            'transaction_no' => $tresponse->getTransId(),
            'expiry_date'   => $expirydate,
        ]);

        return true ;
       
    }
}