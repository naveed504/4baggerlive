<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\Team\Team;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UserData;
use Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Helpers;
use Illuminate\Support\Str;
use App\Jobs\RegisterationJob;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $states = State::all();
        return view('auth.register', compact('states'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => ['string', 'digits:10'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => [
            //     'required',
            //     'confirmed',
            //     'string',
            //     'min:10',             // must be at least 10 characters in length
            //     'regex:/[a-z]/',      // must contain at least one lowercase letter
            //     'regex:/[A-Z]/',      // must contain at least one uppercase letter
            //     'regex:/[0-9]/',      // must contain at least one digit
            //     'regex:/[@$!%*#?&]/', // must contain a special character
            // ],
            // 'dda_checking_account' => ['confirmed'],
            // 'routing_no' => ['confirmed'],

        ]);
    }

    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
   
    protected function create(array $data)
    {       
        
       
        try {
            $user = user::create([
                'name'        => $data['type'] == 4 ? $data['first_name'] . ' ' . $data['last_name'] : $data['name'],
                'email'       => $data['email'],
                'type'        => $data['type'],
                'first_name'  => $data['first_name'] ?? "",
                'last_name'   => $data['last_name'] ?? "",
                'cell_number' => $data['cell_no'] ?? "",
                'password'    => Hash::make($data['password']),
            ]);
           
           
           
        } catch (Exception $e) {
            dd($e->getMessage());
            parent::dangerMessage('Oops! We have encountered an error while adding user');
        }

        /**
         * ------------------ Tournament Director  registration ------------------
         */
        

        if ($user['type'] == '2') {
            $encrypt_account_name = Helpers::encryptUserBankDetails($data['name_of_checkingaccount']);   
            $encrypt_account_dda  = Helpers::encryptUserBankDetails($data['dda_checking_account']);       
            $encrypt_routing_no   = Helpers::encryptUserBankDetails($data['routing_no']);

            $createRecord = array(
                'company_name'  => $data['name'],
                'director_name' => $data['director_name'],
                'street'        => $data['address'],
                'city'          => $data['city'],
                'state_id'      => $data['state'],
                'zipcode'       => $data['zip_code'],
                'tax_id'        => $data['tax_id'],
                'account_name'  => $encrypt_account_name,
                'dda_checking_account'  => $encrypt_account_dda,
                'dd_routingno'  => $encrypt_routing_no,
                'name_of_field' => json_encode($data['name_of_field']),
                'no_of_field'   => json_encode($data['no_of_field']),
                'field_state'   => json_encode($data['field_state']),
                'field_city'    => json_encode($data['field_city']),
            );
            try {
                 $user->director()->create($createRecord);
                 $directorData= User::with('director')->where('id','=', $user->id)->first();
                 $send =(new RegisterationJob($directorData))->delay(Carbon::now()->addMinutes(1));
                 dispatch($send);
                 
                 
            } catch (Exception $e) {
                dd($e->getMessage());
            }
            /*
            * ------------------ Team Registration ------------------
            */
        } elseif ($user['type'] == '3') {

            $teamData = array(
                'team_name'  => $data['team_name'],
                'team_city'  => $data['t_city'],
                'state_id'   => $data['t_state'],
                'age_group'  => $data['age_group'],
                'division'   => $data['division']
            );
            try {
                $user->team()->create($teamData);
                $coachData= User::with('team')->where('id','=', $user->id)->first();
                $send =(new RegisterationJob($coachData))->delay(Carbon::now()->addMinutes(1));
                dispatch($send);
            } catch (Exception $e) {
                dd($e->getMessage());
            }

            return $user;
            /*
            * ------------------ Player Registration ------------------
            */
        } else {
           
            $file_name =Helpers::saveImage($data['fileupload']);

            $createRecord = array(
                'p_city'                => $data['p_city'],
                'state_id'              => $data['p_state'],
                'zip_code'              => $data['zip_code'],
                'date_of_birth'         => $data['day'] . '-' . $data['month'] . '-' . $data['year'],
                'player_height'         => $data['height'] . '.' . $data['inches'],
                'parents_f_name'        => json_encode($data['parent_firstname']),
                'parents_l_name'        => json_encode($data['parent_lastname']),
                'parents_cell_number'   => json_encode($data['parent_cellno']),
                'parents_email'         => json_encode($data['parent_email']),
                'graduation_year'       => $data['graduation_year'],
                'player_weight'         => $data['weight'],
                'school_name'           => $data['school'],
                'college_commitment'    => $data['college_commit'],
                'player_throw'          => $data['throw'],
                'player_bat'            => $data['bat'],
                'primary_position'      => $data['primary_position'],
                'secondary_position'    => $data['secondary_possition'],
                'player_file'           => $file_name,
                'player_facebook'       => $data['facebook'],
                'player_twitter'        => $data['twitter'],
                'player_instagram'      => $data['instagram'],
            );

            try {
                $user->player()->create($createRecord);
            } catch (Exception $e) {
                dd($e->getMessage());
            }

            return $user;
        }

        return $user;
    }

   
}
