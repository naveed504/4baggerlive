<?php

namespace App\Services;

use App\Models\User;
use App\Models\CheckAgeGroupStatus;
use App\Models\Event\Event;
use App\Models\Event\EventRegisterTeam;
use App\Models\Director\DirectorData;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\Hash;

class DirectorService
{
    protected $parent;

    public function __construct(Controller $parent)
    {
        $this->parent = $parent;
        
    }

    /**
     * Update Director
     *
     * @param int User::$id
     * @param collection $request
     */
    public function updateDirector($id, $request)
    {

        if ($request['password'] != $request['password_confirmation']) {
            $this->parent->dangerPasswordMessage(1);
            return redirect()->back();
        }
        if ($request['password']) {
            Validator::make($request->all(), [ // <---
                'password' => 'required_with:password_confirmation|same:password_confirmation|string|min:8',
                'password_confirmation' => 'min:8',
            ]);
           
        }
        $director = User::find($id);

        try {
            $director->director->update([
                'company_name'          => Auth::user()->type == 2 ? $request->name : $director->name,
                'street'                => Auth::user()->type == 2 ?  $request->address : $director->director->street,
                'city'                  => Auth::user()->type == 2 ? $request->city : $director->director->city,
                'state_id'              => Auth::user()->type == 2 ? $request->state : $director->director->state_id,
                'zipcode'               => Auth::user()->type == 2 ? $request->zip_code : $director->director->zipcode,
                'tax_id'                => Auth::user()->type == 2 ? $request->tax_id : $director->director->tax_id,
                'account_name'          => Auth::user()->type == 2 ? $request->name_of_checkingaccount : $director->director->account_name,
                'dda_checking_account'  => Auth::user()->type == 2 ? $request->dda_checking_account : $director->director->dda_checking_account,
                'dd_routingno'          => Auth::user()->type == 2 ? $request->routing_no : $director->director->dd_routingno,
                'name_of_field'         => json_encode($request->name_of_field),
                'no_of_field'           => json_encode($request->no_of_field),
                'field_state'           => json_encode($request->field_state),
                'field_city'            => json_encode($request->field_city),
            ]);
            $director->update([
                'password' => ($request->password) ? Hash::make($request->password)   : $director->password,
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return 'updated';
    }

    /**
     * Delete Director
     *
     * @param int App/Models/User::id
     */
    public function deleteDirector($id)
    {
        $director = User::find($id);
        try {
            $director->update([
                'status' => 0,
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }


        return true;
    }
}
