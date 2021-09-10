<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class EditDirectorRequest extends FormRequest
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
            'name_of_field'       => 'required',
            'no_of_field'         => 'required',
            'field_state'         => 'required',
            'field_city'          => 'required',

         ];
    }

    public function messages()
    {
        return [
            'name_of_field.required'  => "Please enter Field name",
            'no_of_field.required'    => "Please enter  no of Field",
            'field_state.required'    => "Please enter Field State ",
            'field_city.required'     => "Please enter Field City",


        ];
    }
}
