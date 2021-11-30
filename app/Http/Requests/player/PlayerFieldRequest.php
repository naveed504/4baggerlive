<?php

namespace App\Http\Requests\player;

use Illuminate\Foundation\Http\FormRequest;

class PlayerFieldRequest extends FormRequest
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
        'season' => 'required',
        'matches' => 'required',
        'innings' => 'required',
        'a'       => 'required',
        'ci'      => 'required',
        'db'      => 'required',
        'fp'      => 'required',
        'pb'      => 'required',
        'po'      => 'required',
        'e'       => 'required',
        'tc'      => 'required',
        'tp'      => 'required'

        ];
    }

    public function messages()
    {
        return [
            'season.required'     => "Season Field is required",
            'matches.required'    => "Matches Field is required",
            'innings.required'    => "Innings Field is required",
            'a.required'          => "A Field is required",
            'ci.required'         => "CI Field is required",
            'db.required'         => "DB Field is required",
            'fp.required'         => "FP Field is required",
            'pb.required'         => "PB  Field is required",
            'po.required'         => "PO Field is required",
            'e.required'          => "E Field is required",
            'tc.required'         => "TC Field is required",
            'tp.required'         => "TP Field is required",
           
        ];
    }
}
