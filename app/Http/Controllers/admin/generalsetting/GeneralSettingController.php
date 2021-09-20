<?php

namespace App\Http\Controllers\admin\generalsetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\General\GeneralSetting;
use File;
use Helpers;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $admin =User::where('type','=',1)->first();
        $generalSetting = GeneralSetting::latest()->first();
        
        return view('admin.pages.frontend.settings.adminprofile',compact('admin', 'generalSetting'));
    }

    public function updateadminprofile(Request $request)
    {
        $admin =User::where('type','=',1)->first();
      
        if(!empty($request->current_password)){
            $request->validate([
                'password' => 'required|min:8',
                'confirmpassword' => 'required|same:password',
            ]);          
               
                if(Hash::check($request->current_password, $admin->password)){  
                   $newpassword = Hash::make($request->password);    
                   parent::successMessage("Your Password updated successfully");            

                } else{
                    parent::dangerMessage("Your Current password does not match our records");
                    return redirect()->back();
                }
                                
        } 
        
        $updateimage = Helpers::updateImage($request->profile_photo, $admin->profile_photo);
        
        try{
            $admin->update([
                'name'          => $request->name,
                'email'         => $request->email,
                'profile_photo' => $updateimage,
                'password'      => (!empty($newpassword)) ? $newpassword : $admin->password,
            ]);
            $general =GeneralSetting::find($request->general_id);
            if(empty($general)) {
                $this->creategeneratSetting($request);
            } else {
                $this->updateGeneralSetting($general , $request);
            }

        } catch(Exception $e) {
            dd($e->getMessage());
        }
        parent::successMessage('Admin Profile Updated Successfully"');
        return redirect()->back();
    }
     
    public function creategeneratSetting($request)
    {       
        
        GeneralSetting::create([
            'city'              => $request->city,
            'street'            => $request->street,
            'primary_email'     => $request->primary_email,
            'secondary_email'   => $request->secondary_email,
            'primary_phoneno'   => $request->primary_phoneno,
            'secondary_phoneno' => $request->secondary_phoneno,
           
        ]);

    }

    public function updateGeneralSetting($updateGeneralSetting, $request)
    {        
        $updateGeneralSetting->update([
            'city'              => $request->city,
            'street'            => $request->street,
            'primary_email'     => $request->primary_email,
            'secondary_email'   => $request->secondary_email,
            'primary_phoneno'   => $request->primary_phoneno,
            'secondary_phoneno' => $request->secondary_phoneno,
        ]);

    }
}
