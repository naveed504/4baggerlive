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
            
            'season'       => ['required'],
            'matches'      => [ 'required'],
            'innings'      => [ 'required'],
            'one_b'        => [ 'required'],
            'two_b'        => ['required'],
            'three_b'      => ['required'],
            'ab'           => ['required'],
            'ba'           => ['required'],
            'bb'           => ['required'],
            'bb_k'         => ['required'],
            'bsr'          => ['required'],
            'gpa'          => ['required'],
            'gs'           => ['required'],
            'h'            => ['required'],
            'hbp'          => ['required'],
            'hr'           => ['required'],
            'hr_h'         => ['required'],
            'k'            => ['required'],
            'lob'          => ['required'],
            'obp'          => ['required'],
            'r'            => ['required'],
            'rc'           => ['required'],
            'rp'           => ['required'],
            'rbi'          => ['required'],
            'ta'           => ['required'],
            'tb'           => ['required'],
        ];
    }

    //message display
    public function messages()
    {
        return [
            'season.required'       => "Season must be required",
            'matches.required'      => "matches must be required",
            'innings.required'      => "innings must be required",
            'one_b.required'        => "one_b must be required",
            'two_b.required'        => "two_b must be required",
            'three_b.required'      => "three_b must be required",
            'ab.required'           => "ab must be required",
            'ba.required'           => "ba must be required",
            'bb.required'           => "bb must be required",
            'bb_k.required'         => "bb_k must be required",
            'bsr.required'          => "bsr must be required",
            'gpa.required'          => "gpa must be required",
            'gs.required'           => "gs must be required",
            'h.required'            => "h must be required",
            'hbp.required'          => "hbp must be required",
            'hr_h.required'         => "hr_h must be required",
            'k.required'            => "k must be required",
            'lob.required'          => "lob must be required",
            'obp.required'          => "obp must be required",
            'r.required'            => "r must be required",
            'rc.required'           => "rc must be required",
            'rp.required'           => "rp must be required",
            'rbi.required'          => "rbi must be required",
            'ta.required'           => "ta must be required",
            'tb.required'           => "tb must be required",
        ];
    }
}
