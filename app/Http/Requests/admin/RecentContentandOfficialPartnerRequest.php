<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class RecentContentandOfficialPartnerRequest extends FormRequest
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
            'title'       => 'required',
            'image'       => 'required',
            'detail'         => 'required',
           
         ];
    }

    public function messages()
    {
        return [
            'title.required'  => "Please enter Title name",
            'image.required'  => "Please enter  Image",
            'detail.required'    => "Please enter Content Detail",
          


        ];
    }
}
