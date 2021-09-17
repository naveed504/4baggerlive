<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class GeneralContactInfoRequest extends FormRequest
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
            'city'             => 'required',
            'street'           => 'required',
            'primary_email'    => 'required',
            'primary_phoneno'  => 'required',
            
         ];
    }
     
    public function messages()
    {
        return [
            'city.required'             => "Please enter city name",
            'street.required'           => "Please enter  street no",
            'primary_email.required'    => "Please enter primary email ",
            'primary_phoneno.required'  => "Please enter  primary phone number",
            


        ];
    }
}
