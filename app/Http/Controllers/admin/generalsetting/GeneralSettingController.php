<?php

namespace App\Http\Controllers\admin\generalsetting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use File;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $admin =User::where('type','=',1)->first();
        return view('admin.pages.settings.adminprofile',compact('admin'));
    }

    public function updateadminprofile(Request $request)
    {
        $admin =User::where('type','=',1)->first();

        if(!empty($request->password || $request->confirmpassword)) {
            $request->validate([
                'password' => 'required|min:8',
                'confirmpassword' => 'required|same:password',
            ]);
        }
        
       

        if(empty($request->profile_photo)){
            $profilePhoto = $admin->profile_photo;
        } else{
            $request->hasFile('profile_photo');
            $imagePath = public_path('admin/profilesettings/'.$admin->profile_photo);
            if(File::exists($imagePath)){
                File::delete($imagePath);
            }
            $destinationPath = public_path('admin/profilesettings/');
            $file = $request->profile_photo;
            $fileName = time().'.'.$file->clientExtension();
            $file->move($destinationPath, $fileName);
            $profilePhoto = $fileName;
        }       
       
        try{
            $admin->update([
                'name' => $request->name,
                'email'=> $request->email,
                'profile_photo' => $profilePhoto,
                'password' => ($request->newpass) ? Hash::make($request->newpass) : $admin->password,
            ]);
        } catch(Exception $e) {
            dd($e->getMessage());
        }
        toastr()->success('Admin Profile Updated Successfully"');
        return redirect()->back();

        
        
    }
}
