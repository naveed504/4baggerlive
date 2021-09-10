<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param String
     * @return Toastr Success Notification
     */
    public function successMessage($message)
    {
        toastr()->success($message);
    }

    /**
     * @param String
     * @return Toastr Error Notification
     */
    public function dangerMessage($message)
    {
        toastr()->error($message);
    }

     /**
     * custom massage for payment integration
     * App\Controllers\Team\Event\EventController
     * App\PaymentError\CustomError
     * App\Services\PaymentService
     * App\Repositories\PaymentRepository
     * Success Message for Coach pay to event
     */
    public function transPassMsg($tresponse)
    {
        if($tresponse == 1) {
            $message_text = "Team added to the Event Please make a  payment" ;
            $msg_type     = "success_msg";
            toastr()->success($message_text);       
        } else {
            $message_text = $tresponse->getMessages()[0]->getDescription() . ", Transaction ID: " . $tresponse->getTransId();
            $msg_type     = "success_msg";
            toastr()->success($message_text);
            
        }
    }

    /**
     * custom massage for payment integration
     * App\Controllers\Team\Event\EventController
     * App\PaymentError\CustomError
     * App\Services\PaymentService
     * App\Repositories\PaymentRepository
     * Error Message for Coach pay to event
     */
    public function transFailMsg($result)
    {
        if($result == 1  OR $result == 2) {
            $message_text  = 'Transaction Fail,incorrect date or invalid credit card number ';
            $message_text1 = 'There were some issue with the payment. Please try again after 2 minutes';
            $msg_type      = "error_msg";
            toastr()->error($message_text);
            toastr()->error($message_text1);
        }   elseif($result == 3) {
            $message_text  = "No response returned";
            $msg_type      = "error_msg";
            toastr()->error($message_text);
        }elseif($result == 4){
            $message_text  = "Team already exists. Please make a payement";
            $msg_type      = "error_msg";
            toastr()->error($message_text);
        }
    }


    /**
     * custom massage for payment integration
     * App\Controllers\Director\HomeController
     * App\PaymentError\CustomError
     * App\Services\RefundPaymentService
     * App\Repositories\RefundPaymentRepository
     * Error Message for Director to refundAmount
     */
    public function refundErrorMsg($errno)
    {
        
        if($errno == 1){
            $message_text  = "Transaction Failed";
            $msg_type      = "error_msg";
            toastr()->error($message_text);
        }
        elseif($errno == 2) {
            $message_text1 = "Transaction Failed";
            $message_text  = "Error message : " . "Invalid Transaction number or credit card details" ;
            $msg_type      = "error_msg";
            toastr()->error($message_text1);
            toastr()->error($message_text);
        } elseif($errno == 3) {
            $message_text  = "No response returned";
            $msg_type      = "error_msg";
            toastr()->error($message_text);
        }
    }

    /**
     * custom massage for payment integration
     * App\Controllers\Director\HomeController
     * App\PaymentError\CustomError
     * App\Services\RefundPaymentService
     * App\Repositories\RefundPaymentRepository
     * success Message for Director to refundAmount
     */
    public function refundPassMsg($tresponse)
    {
        if($tresponse){        
        $message_text  = "Refund Successfully";
        $message_text1 = "Transaction Id : " . $tresponse->getTransId() ;
        $msg_type      = "success_msg";
        toastr()->success($message_text);
        toastr()->success($message_text1);
        }
    }


    /**
     * @param String
     * @return Age
     */
    public function findAge($date = '14-12-1988')
    {
        return date_diff(date_create(), date_create($date))
            ->format("%Y Years and %M Months");
    }
}
