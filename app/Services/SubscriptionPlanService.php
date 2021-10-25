<?php
namespace App\Services;
use App\Http\Controllers\Controller;
use App\Repositories\SubscriptionPlanRepository;


class SubscriptionPlanService
{
    protected $paymentRepository;
    protected $parent;

    public function __construct(Controller $parent, SubscriptionPlanRepository $paymentRepository)
    {

        $this->parent = $parent;
        $this->paymentRepository = $paymentRepository;
    }

    public function saveSubscriptionPlanTransaction($tresponse , $request)
    {
        if ($tresponse != null && $tresponse->getMessages() != null) {
            $this->paymentRepository->savePaymentTransactionInToDB($tresponse, $request);
            $msg3 = 3;
            $this->parent->transPassMsg($msg3);
        } else {
            $errno1 = 1;
            $this->parent->transFailMsg($errno1); //err 1
        }

        return 'true';

       
    }

}