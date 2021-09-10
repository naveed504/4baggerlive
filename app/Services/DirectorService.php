<?php

namespace App\Services;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class DirectorService
{

    /**
     * Update Director
     *
     * @param int User::$id
     * @param collection $request
     */
    public function updateDirector($id, $request)
    {

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
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return true;
    }

    /**
     * Delete Director
     *
     * @param int App/Models/User::id
     */
    public function deleteDirector($id)
    {
        $user = User::find($id);

        if (!empty($user)) {
            try {
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        } else {
            return false;
        }

        return true;
    }
}
