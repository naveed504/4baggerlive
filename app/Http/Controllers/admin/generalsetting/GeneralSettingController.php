<?php

namespace App\Http\Controllers\admin\generalsetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\General\GeneralSetting;
use File;
use Exception;
use Helpers;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $admin =User::where('type','=',1)->first();
        return view('admin.pages.frontend.settings.adminprofile',compact('admin'));
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
        $imgpath= public_path('admin/allimages/');
        $updateimage = Helpers::updateImage($request->profile_photo, $admin->profile_photo, $imgpath);

        try{
            $admin->update([
                'name'          => $request->name,
                'email'         => $request->email,
                'profile_photo' => $updateimage,
                'password'      => (!empty($newpassword)) ? $newpassword : $admin->password,
            ]);
        } catch(Exception $e) {
            dd($e->getMessage());
        }
        parent::successMessage('Admin Profile Updated Successfully"');
        return redirect()->back();
    }

    public function createSetting($request)
    {
        $imgpath= public_path('admin/allimages/');
        $backgroundimage = Helpers::saveImage($request->mission_bgimg, $imgpath);
        GeneralSetting::create([
            'city'              => $request->city,
            'street'            => $request->street,
            'primary_email'     => $request->primary_email,
            'secondary_email'   => $request->secondary_email,
            'primary_phoneno'   => $request->primary_phoneno,
            'secondary_phoneno' => $request->secondary_phoneno,
            'facebook'          => $request->facebook,
            'twitter'           => $request->twitter,
            'instagram'         => $request->instagram,
            'google'            => $request->google,
            'mission_title'     => $request->mission_title,
            'mission_bgimg'     => $backgroundimage,
            'mission_bgimgtitle'=> $request->mission_bgimgtitle,
            'mission_statment'  => $request->mission_statment,
            'mission_bgimgcontent'=> $request->mission_bgimgcontent

        ]);
    }

    public function updateSetting($updateGeneralSetting, $request)
    {
        
        $imgpath= public_path('admin/allimages/');
        $updateGeneralSetting = GeneralSetting::find($request->general_id);
        $updateimage = Helpers::updateImage($request->mission_bgimg, $updateGeneralSetting->mission_bgimg, $imgpath);
        $updateGeneralSetting->update([
            'city'              => $request->city,
            'street'            => $request->street,
            'primary_email'     => $request->primary_email,
            'secondary_email'   => $request->secondary_email,
            'primary_phoneno'   => $request->primary_phoneno,
            'secondary_phoneno' => $request->secondary_phoneno,
            'facebook'          => $request->facebook,
            'twitter'           => $request->twitter,
            'instagram'         => $request->instagram,
            'google'            => $request->google,
            'mission_title'     => $request->mission_title,
            'mission_bgimg'     => $updateimage,
            'mission_bgimgtitle'=> $request->mission_bgimgtitle,
            'mission_statment'  => $request->mission_statment,
            'mission_bgimgcontent'=> $request->mission_bgimgcontent
        ]);
    }
    public function generalSetting()
    {
        $generalSetting = GeneralSetting::latest()->first();
        return view('admin.pages.frontend.settings.generalsetting',compact( 'generalSetting'));
    }

    public function updateGeneralSetting(Request $request)
    {
        try{
            $general =GeneralSetting::find($request->general_id);

            if(empty($general)) {
                $this->createSetting($request);
            } else {
                $this->updateSetting($general , $request);
            }
            parent::successMessage('Site Setting Updated Successfully"');
        return redirect()->back();
        } catch(Exception $e) {
            dd($e->getMessage());
        }
    }
}
