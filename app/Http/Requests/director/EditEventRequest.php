<?php

namespace App\Http\Requests\director;

use Illuminate\Foundation\Http\FormRequest;

class EditEventRequest extends FormRequest
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
            'event_name'        => 'required|regex:/[a-zA-Z0-9][a-zA-Z0-9 ]+/',
            'total_matches'     => 'required|numeric',
            'start_date'        => 'required|date',
            'end_date'          => 'required|date',
            'entry_fee'         => 'required|numeric',
            'max_division'      => 'required',
            'event_format'      => 'required',
            'event_summary'     => 'required',
            'event_logo'        => 'mimes:jpg,jpeg,png',
            'event_city'        => 'required|regex:/[a-zA-Z][a-zA-Z ]+/',
            'event_state'       => 'required',
            'event_venue'       => 'required',
            'bat_type'          => 'required'
        ];
    }

    public function messages()
    {
        return [
            'event_name.required'       => "Please enter event name",
            'event_name.regex'          => "Avoid special characters in event name",
            'total_matches.required'    => "Please enter total matches of the event",
            'total_matches.numeric'     => "Please enter a numeric value",
            'start_date.required'       => "Please enter event start date",
            'start_date.date'           => "Please enter a valid date",
            'end_date.required'         => "Please enter event end date",
            'end_date.date'             => "Please enter a valid date",
            'age_restriction.required'  => 'Please specify minimum age restriction',
            'age_restriction.date'      => 'Please enter a valid date',
            'grad_restriction.required' => 'Please specify minimum graduation year limit',
            'grad_restriction.numeric'  => 'Please enter a numeric value',
            'entry_fee.required'        => 'Please specify the entry fee',
            'entry_fee.numeric'         => 'Please enter a numeric value',
            'max_division.required'     => 'Please enter maximum allowed division',
            'event_format.required'     => 'Please enter event format details',
            'event_summary.required'    => 'Please enter event summary',
            'event_logo.mimes'          => 'Only .JPEG, .JPG and .PNG files are allowed',
            'event_city.required'       => 'Please enter city',
            'event_city.regex'          => 'City may only have alphabets',
            'event_state.required'      => 'Please enter state',
            'event_venue.required'      => 'Please enter field',
            'bat_type.required'         => 'Please Select bat type'

        ];
    }
}
