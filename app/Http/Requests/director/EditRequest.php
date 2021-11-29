<?php

namespace App\Http\Requests\director;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'team_name' => [ 'required'],
            'team_city' => ['alpha', 'required'],
            'team_state' => ['string', 'required'],
            'age_group' => ['required'],
            'division' => ['required'],
            'terms_agreement' => ['required'],
            'site_agreement' => ['required'],

            'name' => ['regex:/[a-zA-Z][a-zA-Z ]+/', 'required'],
            'cell_no' => [ 'required'],
            'email' => 'required|email',
            'password' => [
                'confirmed', 'string',
                'min:8',             // must be at least 10 characters in length
            ],
            'password_confirmation' => ['same:password', 'required_with:password'],
        ];
    }
    public function messages()
    {
        return [
            'team_name.required' => "Coach name is required",
            'team_city.required' => "Team city is required",
            'team_state.required' => "Team state is required",
            'site_agreement.required' => "Site agreement  is required",
            'terms_agreement.required' => "Terms agreement is required",
            'age_group.required' => "Age Group is required",
            'division.required' => "Division State is required",

            'name.required' => "Coach name is required",
            'cell_no.required' => "Cell phone is required .",
            'email.required' => "Email is required",
            'email.email' => "Email format invalid ",
            'email.unique' => "The email has already been taken",
            'password.confirmed' => "The Password confirmation does not match",
            'password_confirmation.same' => "The Password confirmation does not same",
            'password_confirmation.required' => "Please confirm Password",

        ];
    }
}
