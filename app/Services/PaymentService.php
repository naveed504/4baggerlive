<?php

namespace App\Services;

use App\Repositories\PaymentRepository;
use App\Http\Controllers\Controller;

class PaymentService
{
    protected $paymentRepository;
    protected $parent;

    public function __construct(Controller $parent, PaymentRepository $paymentRepository)
    {

        $this->parent = $parent;
        $this->paymentRepository = $paymentRepository;
    }

    /**
     * storePaymentTransaction
     *
     * @param array $request   
     * @param array $tresponse   
     * @return response
     */
    public function storePaymentTransaction($tresponse, $request)
    {
        if ($tresponse != null && $tresponse->getMessages() != null) {
            $this->paymentRepository->savePaymentTransactionInToDB($tresponse, $request);
            $msg2 = 1;
            $this->parent->transPassMsg($msg2);
        } else {
            $errno1 = 1;
            $this->parent->transFailMsg($errno1); //err 1
        }
    }

    /**
     * Add Team To The Event Without Payment
     *
     * @param array $data 
     * @return response
     */
    public function registerTeamInToEventWithoutPayment($data)
    {
        $this->paymentRepository->storeTeamIntoEvent($data);
    }

}