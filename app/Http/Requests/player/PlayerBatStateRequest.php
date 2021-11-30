<?php

namespace App\Http\Requests\player;

use Illuminate\Foundation\Http\FormRequest;

class PlayerBatStateRequest extends FormRequest
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
            
            'season'       => 'required',
            'matches'      =>  'required',
            'innings'      =>  'required',
            'one_b'        =>  'required',
            'two_b'        => 'required',
            'three_b'      => 'required',
            'ab'           => 'required',
            'ab_hr'           => 'required',
            'ba'           => 'required',
            'bb'           => 'required',
            'bb_k'         => 'required',
            'bsr'          => 'required',
            'gpa'          => 'required',
            'gs'           => 'required',
            'h'            => 'required',
            'hbp'          => 'required',
            'hr'           => 'required',
            'hr_h'         => 'required',
            'k'            => 'required',
            'lob'          => 'required',
            'obp'          => 'required',
            'r'            => 'required',
            'rc'           => 'required',
            'rp'           => 'required',
            'rbi'          => 'required',
            'ta'           => 'required',
            'tb'           => 'required',
        ];
    }

    //message display
    public function messages()
    {
        return [
            'season.required'       => "Season Field is Required",
            'matches.required'      => "Matches Field is Required",
            'innings.required'      => "Innings Field is Required",
            'one_b.required'        => "1B Field is Required",
            'two_b.required'        => "2B Field is Required",
            'three_b.required'      => "3B Field is Required",
            'ab.required'           => "AB Field is Required",
            'ab_hr.required'        => "AB/HR Field is Required",
            'ba.required'           => "BA Field is Required",
            'bb.required'           => "BB Field is Required",
            'bb_k.required'         => "BB/K Field is Required",
            'bsr.required'          => "BSR Field is Required",
            'gpa.required'          => "GPA Field is Required",
            'gs.required'           => "GS Field is Required",
            'h.required'            => "H Field is Required",
            'hbp.required'          => "HBP Field is Required",
            'hr_h.required'         => "HR/H Field is Required",
            'k.required'            => "K Field is Required",
            'lob.required'          => "LOB Field is Required",
            'obp.required'          => "OBP Field is Required",
            'r.required'            => "R Field is Required",
            'rc.required'           => "RC Field is Required",
            'rp.required'           => "RP Field is Required",
            'rbi.required'          => "RBI Field is Required",
            'ta.required'           => "TA Field is Required",
            'tb.required'           => "TB Field is Required",
        ];
    }
}
