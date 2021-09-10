<?php
namespace App\Repositories;

use App\Models\Request;
use App\Models\Payments\Payment;
use App\Models\Event\EventRegisterTeam;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Payments\RefundPayment;
use Exception;

class RefundPaymentRepository
{
     /**
     * storePaymentTransaction Intp DB
     *
     * @param Response  $tresponse App\Services\RefundPaymentService\storeRefundTransactionInToDB
     * @param FormInputFieldData $input App\Services\RefundPaymentService\storeRefundTransactionInToDB
     * @return response
     */
    public function storeRefundTransactionInToDB($input , $tresponse)
    {
        try{
            RefundPayment::create([
                'event_register_team_id'    => $input['payment_payout_id'],
                'refund_transaction_no'     => $tresponse->getTransId(),
                'refund_amount'             => $input['refundAmount']
            ]);
        } catch(Exception $e) {
            dd($e->getMessage());
        }
    }

}