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
            'assists'               => ['integer', 'required'],
            'catcher_interference'  => ['integer', 'required'],
            'double_plays'          => ['integer', 'required'],
            'fielding_percentage'   => ['numeric', 'required'],
            'innings'               => ['integer','required'],
            'passed_ball'           => ['integer','required'],
            'put_out'               => ['integer','required'],
            'errors'                => ['integer','required'],
            'total_chances'         => ['integer','required'],
            'triple_play'           => ['integer','required'],

        ];
    }

    public function messages()
    {
        return [
            'assists.required'              => "Assists must be required",
            'catcher_interference.required' => "Catcher Interference must be required",
            'double_plays.required'         => "Double Plays must be required",
            'fielding_percentage.required'  => "Fielding Percentage must be required",
            'innings.required'              => "Innings must be required",
            'passed_ball.required'          => "Passed Ball must be required",
            'put_out.required'              => "Put Out must be required",
            'errors.required'               => "Errors  must be required",
            'total_chances.required'        => "Total Chances must be required",
            'triple_play.required'          => "Triple Play played must be required",

            'assists.integer'              => "Assists must be integer",
            'catcher_interference.integer' => "Catcher Interference must be integer",
            'double_plays.integer'         => "Double Plays must be integer",
            'fielding_percentage.numeric'  => "Fielding Percentage must be float",
            'innings.integer'              => "Innings must be integer",
            'passed_ball.integer'          => "Passed Ball must be integer",
            'put_out.integer'              => "Put Out must be integer",
            'errors.integer'               => "Errors must be integer",
            'total_chances.integer'        => "Total Chances must be integer",
            'triple_play.integer'          => "Triple Play played must be integer",


        ];
    }
}
