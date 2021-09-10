<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DirectorRequest extends FormRequest
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

            'name' => ['regex:/[a-zA-Z][a-zA-Z ]+/', 'required'],
            'director_name' => ['regex:/[a-zA-Z][a-zA-Z ]+/', 'required'],
            'address' => ['alphanumeric', 'required'],
            'field_city[]' => ['alpha', 'required'],
            'city' => ['alpha', 'required'],
            'state' => ['required'],
            'field_state[]' => ['required'],
            'zip_code' => ['numeric', 'required'],
            'cell_no' => ['required'],
            'tax_id' => ['numeric', 'required'],
            'name_of_field[]' => ['regex:/[a-zA-Z][a-zA-Z ]+/', 'required'],
            'no_of_field[]' => ['numeric', 'required'],
            'name_of_checkingaccount' => ['alphanumeric', 'required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required', 'confirmed', 'string',
                'min:8',             // must be at least 10 characters in length
            ],
            'password_confirmation' => ['same:password', 'required'],
            'dda_checking_account' => ['confirmed', 'required', 'numeric'],
            'routing_no' => ['confirmed', 'required', 'numeric'],
            'routing_no_confirmation' =>['confrimed','same:routing_no','required'],
            'dda_checking_account_confirmation' => ['required', 'same:dda_checking_account', 'confrimed'],

        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Company name is required",
            'director_name.required' => "Director name is required",
            'address.required' => "address is required",
            'field_city[].required' => "Field city is required",
            'city.required' => "city is required",
            'field_state[].required' => "Field State is required",
            'state.required' => "state is required",
            'zip_code.required' => "Zip Code is required",
            'zip_code.numeric' => "Zip Code should be numeric value",
            'cell_no.required' => "Phone number  is required",
            'tax_id.required' => "Tax id is required",
            'name_of_field[].required' => "Name of field is required",
            'name_of_field[].regex' => "Name of field must be alphabetic",
            'no_of_field[].required' => "No of field  is required",
            'no_of_field[].numeric' => "No of field should be numeric",
            'name_of_checkingaccount.required' => "Name of checking Account is required",
            'email.required' => "Email is required",
            'email.email' => "Email format invalid ",
            'email.unique' => "The email has already been taken",
            'password.required' => "password is required",
            'password.confirmed' => "The Password confirmation does not match",
            'password_confirmation.required' => "password_confirmation is required",
            'password_confirmation.same' => "The Password confirmation does not same",
            'dda_checking_account.confirmed' => "The DDA Checking Account confirmation does not match",
            'dda_checking_account.required' => "The DDA Checking Account is required",
            'dda_checking_account.numeric' => "The DDA Checking should be  numeric",
            'routing_no.confirmed' => "The Routing Number confirmation does not match",
            'routing_no.numeric' => "The Routing Number should be  numeric",
            'routing_no.required' => "The Routing Number Account is required",
            'dda_checking_account_confirmation.required' => "The DDA Checking Account is required",
            'dda_checking_account_confirmation.same' => "The DDA Checking Account does not same",
            'dda_checking_account_confirmation.confrimed' => "The DDA Checking Account does not match",
        ];
    }
}
