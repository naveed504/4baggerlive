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
            'season.required'     => "season must be required",
            'matches.required'    => "matches must be required",
            'innings.required'    => "innings must be required",
            'a.required'          => "a must be required",
            'ci.required'         => "ci must be required",
            'db.required'         => "db must be required",
            'fp.required'         => "fp must be required",
            'pb.required'         => "pb  must be required",
            'po.required'         => "po must be required",
            'e.required'          => "e must be required",
            'tc.required'         => "tc must be required",
            'tp.required'         => "tp must be required",
           
        ];
    }
}
