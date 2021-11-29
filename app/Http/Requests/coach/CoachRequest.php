<?php

namespace App\Http\Requests\coach;

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
            'team_name' => ['required'],
            'team_city' => ['alpha', 'required'],
            'team_state' => ['string', 'required'],
            'age_group' => ['required'],
            'division' => ['required'],
            'team_profile' => ['required'],
            'terms_agreement'=>['required'],
            'site_agreement'=>['required'],
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
            'team_profile.required' => "Please select team Profile "


        ];
    }
}
