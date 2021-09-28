<?php

namespace App\Http\Controllers\admin\service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceFee;
class ServiceFeeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fees=ServiceFee::first();
        return view('admin.pages.servicefee.index',compact('fees'));
    }

    public function updateServiceFee(Request $request)
    {
        if($request->servicefee < 1) {
            parent::dangerMessage("Please enter valid service fee");
            return redirect()->back();
        }           
        $fees = ServiceFee::find($request->servicefee_id);
        if(empty($fees)) {           
            ServiceFee::create([
                'servicefee' => $request->servicefee
            ]);
        } else {           
            $fees->update([
                'servicefee' => $request->servicefee
            ]);                      
        }

        parent::successMessage("Service Fee Update Successfully");
        return redirect()->back();
    }
}
