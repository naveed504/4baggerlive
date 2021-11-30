<?php

namespace App\Http\Requests\player;

use Illuminate\Foundation\Http\FormRequest;


class PlayerPitchRequest extends FormRequest
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
        'season'    =>'required',
        'matches'    =>'required',
        'innings'   =>'required',
        'game_start'         =>'required',
        'game_complete'  =>'required',
        'sho'             =>'required',
        'h'             =>'required',
        'r'      =>'required',
        'er'        =>'required',
        'hr'    =>'required',
        'bb'       =>'required',
        'k'       =>'required',
        
        ];
    }


    public function messages()
    {
        return [
            'season.required'    => "season must be required",
            'matches.required'   => "matches must be required",
            'innings.required'  => "innings must be required",
            'game_start.required'        => "game_start Out must be required",
            'game_complete.required' => "game_complete must be required",
            'sho.required'            => "sho must be required",
            'h.required'            => "h must be required",
            'r.required'     => "r must be required",
            'er.required'       => "er must be required",
            'hr.required'      => "hr must be required",
            'bb.required'   => "bb must be required",
            'k.required'   => "k must be required",

           
        ];
    }
}
