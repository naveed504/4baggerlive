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
            'games_played'      => ['integer', 'required'],
            'games_started'     => ['integer', 'required'],
            'complete_games'    => ['numeric', 'required'],
            'shut_out'          => ['integer', 'required'],
            'innings_pitched'   => ['integer','required'],
            'hits'              => ['integer','required'],
            'runs'              => ['integer','required'],
            'base_on_balls'     => ['integer','required'],
            'earned_runs'       => ['required', 'numeric'],
            'home_runs'         => ['integer','required'],
            'strike_out'        => ['required', 'required'],
        ];
    }


    public function messages()
    {
        return [
            'games_played.integer'    => "Game Played must be integer",
            'games_started.integer'   => "Game Started must be integer",
            'complete_games.numeric'  => "Complete Game must be float",
            'shut_out.integer'        => "Shut Out must be integer",
            'innings_pitched.integer' => "Innings Pitched must be integer",
            'hits.integer'            => "Hits must be integer",
            'runs.integer'            => "Runs must be integer",
            'earned_runs.numeric'     => "Earned Runs must be float",
            'home_runs.integer'       => "Home Runs must be integer",
            'strike_out.integer'      => "Strike Out must be integer",
            'base_on_balls.integer'   => "Base On Balls must be integer",

            'games_played.required'   => "Game Played is required",
            'games_started.required'  => "Game Started is required",
            'complete_games.required' => "Complete Game is required",
            'shut_out.required'       => "Shut Out is required",
            'innings_pitched.required'=> "Innings Pitched is required .",
            'hits.required'           => "Hits is required",
            'runs.required'           => "Runs is required",
            'earned_runs.required'    => "Earned Runs is required",
            'home_runs.required'      => "Home Runs is required",
            'strike_out.required'     => "Strike Out is required",
            'base_on_balls.required'  => "Base On Balls is required",
        ];
    }
}
