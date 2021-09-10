<?php

namespace App\Http\Requests\player;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRanksRequest extends FormRequest
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
            'mlb_draft'       => ['string', 'required'],
            'mlb_debuted'     => ['string', 'required'],
            'commitment'      => ['string', 'required'],
            'best_pg_grade'   => ['string', 'required'],
            'over_all'        => ['numeric','required'],
            'mif'             => ['numeric','required'],
            'team_last_played'=> ['string','required'],

        ];
    }

    public function messages()
    {
        return [
            'mlb_draft.required'       => "Mlb Draft must be required",
            'mlb_debuted.required'     => "Mlb Debuted must be required",
            'commitment.required'      => "Commitment must be required",
            'best_pg_grade.required'   => "Pg Grade must be required",
            'over_all.required'        => "National Ranking must be required",
            'mif.required'             => "State Ranking must be required",
            'team_last_played.required'=> "Team Last played must be required",
            'mlb_draft.string'         => "Mlb Draft must be string",
            'mlb_debuted.string'       => "Mlb Debuted must be string",
            'commitment.string'        => "Commitment must be string",
            'best_pg_grade.string'     => "Pg Grade must be string",
            'mif.numeric'              => "State Ranking  must be float",
            'over_all.numeric'         => "National Ranking must be float",
            'team_last_played.string'  => "Team Last played must be string",
        ];
    }
}
