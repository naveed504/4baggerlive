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
            'city'              => 'required',
            'street'            => 'required',
            'primary_email'     => 'required',
            'primary_phoneno'   => 'required',
            'facebook'          => 'required',
            'twitter'           => 'required',
            'instagram'         => 'required',
            'google'            => 'required',
            'mission_title'     => 'required',
           
            'mission_bgimgtitle'=> 'required',
            'mission_statment'  => 'required',
            'mission_bgimgcontent'=> 'required',
            
         ];
    }
     
    public function messages()
    {
        return [
            'city.required'                  => "Please enter city name",
            'street.required'                => "Please enter  street no",
            'primary_email.required'         => "Please enter primary email ",
            'primary_phoneno.required'       => "Please enter  primary phone number",
            'facebook.required'              => "Please enter  Facebook Address",
            'twitter.required'               => "Please enter  Twitter Address",
            'instagram.required'             => "Please enter  Instagram Address",
            'google.required'                => "Please enter  Google Address",
            'mission_title.required'         => "Please enter Mission Title",
            
            'mission_bgimgtitle.required'    => "Please enter  Background Image Title",
            'mission_statment.required'      => "Please enter  Missiion Statement",
            'mission_bgimgcontent.required'  => "Please enter  Background Image Content"


        ];
    }
}
