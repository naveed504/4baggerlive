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
            'season.required'    => "Season Field is required",
            'matches.required'   => "Matches Field is required",
            'innings.required'  => "Innings Field is required",
            'game_start.required'        => "Game Start Out Field is required",
            'game_complete.required' => "Game Complete Field is required",
            'sho.required'            => "SHO Field is required",
            'h.required'            => "H Field is required",
            'r.required'     => "R Field is required",
            'er.required'       => "ER Field is required",
            'hr.required'      => "HR Field is required",
            'bb.required'   => "BB Field is required",
            'k.required'   => "K Field is required",

           
        ];
    }
}
