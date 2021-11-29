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
        'games_played'    =>['required'],
        'games_started'    =>['required'],
        'complete_games'   =>['required'],
        'shut_out'         =>['required'],
        'innings_pitched'  =>['required'],
        'hits'             =>['required'],
        'runs'             =>['required'],
        'earned_runs'      =>['required'],
        'home_runs'        =>['required'],
        'base_on_balls'    =>['required'],
        'strike_out'       =>['required'],
        
        ];
    }


    public function messages()
    {
        return [
            'games_played.required'    => "Game Played must be required",
            'games_started.required'   => "Game Started must be required",
            'complete_games.required'  => "Complete Game must be required",
            'shut_out.required'        => "Shut Out must be required",
            'innings_pitched.required' => "Innings Pitched must be required",
            'hits.required'            => "Hits must be required",
            'runs.required'            => "Runs must be required",
            'earned_runs.required'     => "Earned Runs must be required",
            'home_runs.required'       => "Home Runs must be required",
            'strike_out.required'      => "Strike Out must be required",
            'base_on_balls.required'   => "Base On Balls must be required",

           
        ];
    }
}
