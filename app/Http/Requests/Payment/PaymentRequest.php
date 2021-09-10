<?php

namespace App\Http\Requests\Payment;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'card_number'   => [ 'required','integer'],
            'exp_date'      => ['required','after:yesterday'],
            'cvc_number'    => ['required', 'integer', 'digits_between:3,4'],
            'teamId'        => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'exp_date.required'         => "Expiry date is required",
            'teamId.required'           => " Please select team ",
            'cvc_number.required'       => "Card cvc number is required",
            'card_number.required'      =>"Card number is required",
            'cvc_number.digits_between' => "Cvc number must be 3 or 4 digits",
            'card_number.integer'       =>"card number must be integer",
            'cvc_number.integer'        =>"Cvc number must be integer",
            'exp_date.after'            => 'Please enter future date',
        ];
    }
}
