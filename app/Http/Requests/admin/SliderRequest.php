<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'title_one'       => 'required',
            'title_two'       => 'required',
            'content'         => 'required',
            'cover_photo'     => 'required',

         ];
    }

    public function messages()
    {
        return [
            'title_one.required'  => "Please enter Title name",
            'title_two.required'  => "Please enter  Title name",
            'content.required'    => "Please enter Content Detail ",
            'cover_photo.required'=> "Please enter Cover Photo",


        ];
    }
}
