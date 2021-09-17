@extends('admin.master')
@section('content')
<div class="container mb-5">
        <div class="col-sm-12 mb-5">
            <h3 class="text-center p-4 heading-color">Admin Profile</h3>
        </div>
        <form action="{{ route('updateadminprofile') }}" method="post" id="" enctype="multipart/form-data">
           
            @csrf

            <div class="row">
                <div class="col-sm-10 mx-auto border p-0">
                    <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Manage  Profile Information </strong>
                    </p>
                   
                    <div class="col-sm-12 mt-2 p-4">
                        <div class="row mb-2">
                           
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Name</label>
                                    <input type="text" name="name" class="form-control input__box--wrapper" value="{{ $admin->name }}" >
                                   
                                </div>
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Email</label>
                                    <input type="text" name="email" class="form-control input__box--wrapper" value="{{ $admin->email  }}" >
                                   
                                </div>
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Profile</label>
                                    <input type="file" name="profile_photo" class="form-control input__box--wrapper">
                                   
                                </div>
                               
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Current Password</label>
                                    <input type="password" name="current_password" class="form-control input__box--wrapper">
                                   
                                </div>
                            
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">New Password</label>
                                    <input type="password" name="password" class="form-control input__box--wrapper" value="" >
                                    @error('password')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Confrim Password</label>
                                    <input type="password" name="confirmpassword" class="form-control input__box--wrapper" value="" >
                                    @error('confirmpassword')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>


                    
                   
                </div>
                <div class="row">
                    <div class="col-sm-10 mx-auto border p-0">
                        <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                        <strong>Manage  Contact Information </strong>
                        </p>                   
                        <div class="col-sm-12 mt-2 p-4">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">City *</label>
                                    <input type="text" name="city" class="form-control input__box--wrapper" value="{{ $generalSetting->city ?? ''}}" >
                                    <input type="hidden" name="general_id" value={{ $generalSetting->id  ?? ''}}>
                                </div>
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Street *</label>
                                    <input type="text" name="street" class="form-control input__box--wrapper" value="{{ $generalSetting->street ?? ''}}">
                                </div>
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Primary Email *</label>
                                    <input type="text" name="primary_email" class="form-control input__box--wrapper" value="{{ $generalSetting->primary_email ?? ''}}" >
                                </div>
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Seconday Email</label> 
                                    <input type="text" name="secondary_email" class="form-control input__box--wrapper" value="{{ $generalSetting->secondary_email ?? ''}}">
                                </div>
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Primary PhoneNo *</label>
                                    <input type="text" name="primary_phoneno" class="form-control input__box--wrapper" value="{{ $generalSetting->primary_phoneno ?? ''}}" >
                                </div>
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Seconday PhoneNo</label>
                                    <input type="text" name="secondary_phoneno" class="form-control input__box--wrapper" value="{{ $generalSetting->secondary_phoneno ?? ''}}">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 mx-auto p-0 mt-3 text-center">
                    <button class="btn btn__next" type="submit">Update Profile </button>
                </div>
        </form>
    </div>
@endsection