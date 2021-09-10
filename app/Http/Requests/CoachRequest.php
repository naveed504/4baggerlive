<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoachRequest extends FormRequest
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
            'team_name' => ['regex:/[a-zA-Z][a-zA-Z ]+/', 'required'],
            't_city' => ['alpha', 'required'],
            't_state' => ['string', 'required'],
            'cell_no' => ['required'],
            'age_group' => ['required'],
            'division' => ['required'],
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
            'name.required' => "Team name is required",
            'team_name.required' => "Team name is required",
            't_city.required' => "Team city is required",
            't_state.required' => "Team state is required",
            'cell_no.required' => "Cell phone is required .",
            'age_group.required' => "Age Group is required",
            'division.required' => "Division State is required",
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
