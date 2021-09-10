<?php

namespace App\PaymentError;
//Naveed
class CustomError {
    function __call($name_of_function, $args) {

        // It will match the function name
        if($name_of_function == 'errorsFunction') {

            switch (count($args)) {
                case 1:
                    return call_user_func_array(array($this, 'funWithOneArg'), $args);
                case 2:
                    return call_user_func_array(array($this, 'funWithTwoArg'), $args);
                case 3:
                    return call_user_func_array(array($this, 'funWithThreeArg'), $args);
                case 4:
                    return call_user_func_array(array($this, 'funWithFourArg'), $args);
                case 5:
                    return call_user_func_array(array($this, 'funWithFiveArg'), $args);
                case 6:
                    return call_user_func_array(array($this, 'funWithSixArg'), $args);
                case 7:
                    return call_user_func_array(array($this, 'funWithSevenArg'), $args);

            }
        }
    }

    public function funWithOneArg($a)
    {
        $message_text = 'There were some issue with the payment. Please try again later.';
        $msg_type     = "error_msg";
        toastr()->error($message_text);
    }

    public function funWithTwoArg($tresponse)
    {
        $message_text = $tresponse->getErrors()[0]->getErrorText();
        $msg_type     = "error_msg";
        toastr()->error($message_text);
    }

    public function funWithThreeArg()
    {
        $message_text = 'There were some issue with the payment. Please try again later.';
        $msg_type = "error_msg";
        toastr()->error($message_text);
    }

    public function funWithFourArg($tresponse4 )
    {
        $message_text = $tresponse4->getErrors()[0]->getErrorText();
        $msg_type = "error_msg";
        toastr()->error($message_text);
    }

    public function funWithFiveArg($a5 )
    {
        $message_text = $a5->getMessages()->getMessage()[0]->getText();
        $msg_type = "error_msg";
        toastr()->error($message_text);
    }
    public function funWithSixArg($a6)
    {
        $message_text = "No response returned";
        $msg_type = "error_msg";
        toastr()->error($message_text);

    }
    public function funWithSevenArg($a7)
    {
        dd($a7);
        $message_text = "Team already exists. Please make a  payement";
        $msg_type = "error_msg";
        toastr()->error($message_text);

    }
}