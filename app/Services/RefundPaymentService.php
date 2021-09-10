<?php
namespace App\Services;

use App\Repositories\RefundPaymentRepository;
use App\Http\Controllers\Controller;

class RefundPaymentService
{
    public function __construct(Controller $parent, RefundPaymentRepository $refundPaymentRepository)
    {
        $this->parent = $parent;
        $this->refundPaymentRepository = $refundPaymentRepository;
    }

     /**
     * storePaymentTransaction
     *
     * @param array  $input 
     * @param array  $tresponse 
     * @return response
     */
    public function storeRefundTransaction($tresponse , $input)
    {
        if ($tresponse != null && $tresponse->getMessages() != null) {
            $this->parent->refundPassMsg($tresponse);
            $this->refundPaymentRepository->storeRefundTransactionInToDB($input , $tresponse);
        }  else {
            $errorMsg = 1;
            $this->parent->refundErrorMsg($errorMsg); //err 1               
        }
    }
}