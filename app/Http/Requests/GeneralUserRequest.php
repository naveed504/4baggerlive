<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralUserRequest extends FormRequest
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
            'name' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
           
            'cell_no' => ['required'],
          
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required', 'confirmed', 'string',
                'min:8',             // must be at least 10 characters in length
            ],
            'password_confirmation' => ['same:password', 'required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "User name is required",
            'first_name.required' => "First name is required",
            'last_name.required' => "Last name is required",
            'cell_no.required' => "Cell phone is required .",
            'email.required' => "Email is required",
            'email.email' => "Email format invalid ",
            'email.unique' => "The email has already been taken",
            'password.confirmed' => "The Password confirmation does not match",
            'password.required' => "password is required",
            'password_confirmation.same' => "The Password confirmation does not same",
            'password_confirmation.required' => "password_confirmation is required",

        ];
    }
}
