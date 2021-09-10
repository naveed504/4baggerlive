<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['regex:/[a-zA-Z][a-zA-Z ]+/', 'required'],
            'last_name' => ['regex:/[a-zA-Z][a-zA-Z ]+/', 'required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'p_city' => ['string', 'required'],
            'p_state' => ['string', 'required'],
            'zip_code' => ['numeric', 'required'],
            'cell_no' => ['required'],
            'month' => ['required'],
            'day' => ['required'],
            'year' => ['required'],
            'graduation_year' => ['required'],
            'height' => ['required'],
            'inches' => ['required'],
            'weight' => ['required'],
            'playerclassification' => ['required'],
            'throw' => ['required'],
            'bat' => ['required'],
            'primary_position' => ['required'],
            'secondary_possition' => ['required'],
            'parent_firstname[]' => ['regex:/[a-zA-Z][a-zA-Z ]+/', 'required'],
            'parent_lastname[]' => ['regex:/[a-zA-Z][a-zA-Z ]+/', 'required'],
            'parent_cellno[]' => ['required'],
            'parent_email[]' => ['email', 'required'],
            'facebook' => ['german_url'],
            'twitter' => ['url'],
            'instagram' => ['url'],
            'fileupload' => ['mimes:jpeg,png,jpg,gif,svg|max:2048'],
            'password' => [
                'required', 'confirmed', 'string',
                'min:8',             // must be at least 10 characters in length
            ],
            'password_confirmation' => ['same:password', 'required'],

        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => "player first name is required",
            'first_name.regex' => "player first name must be alphabetic",
            'last_name.required' => "player last name is required",
            'last_name.regex' => "player last name must be alphabetic",
            'email.email' => "Email format invalid ",
            'email.unique' => "The email has already been taken",
            'p_city.required' => "City is required",
            'p_state.required' => "state is required",
            'zip_code.required' => "Zip Code is required",
            'zip_code.numeric' => "Zip Code should be numeric value",
            'cell_no.required' => "Phone number  is required",
            'month.required' => "Month is required",
            'day.required' => "day is required",
            'year.required' => "year is required",
            'graduation_year.required' => "Graduation year is required",
            'height.required' => "height is required",
            'inches.required' => "inches is required",
            'weight.required' => "weight is required",
            'playerclassification.required' => "Player Classification is required",
            'throw.required' => "Player throw is required",
            'bat.required' => "Player bat is required",
            'primary_position.required' => "Primary possition  is required",
            'secondary_possition.required' => "Secondary possition is required",
            'parent_firstname[].required' => "Parents First name  is required",
            'parent_firstname[].regex' => "Parents first name must be alphabets",
            'parent_lastname[].required' => "Parents last name is required",
            'parent_lastname[].regex' => "Parents last name must be alphabets",
            'parent_cellno[].required' => "Parents phone no is required",
            'parent_email[].required' => "Parents email is required",
            'parent_email[].email' => "Parents email format is not valid",
            'fileupload.mimes' => "image should be in this formate jpeg,png,jpg,gif,svg",
            'fileupload.max' => "maximum size of image 2048kb ",
            'facebook.url' => "The facebook url format is invalid",
            'instagram.url' => "The instagram url format is invalid",
            'twitter.url' => "The twitter url format is invalid",
            'password.confirmed' => "The Password confirmation does not match",
            'password.required' => "password is required",
            'password_confirmation.same' => "The Password confirmation does not same",
            'password_confirmation.required' => "password_confirmation is required",

        ];
    }
}
