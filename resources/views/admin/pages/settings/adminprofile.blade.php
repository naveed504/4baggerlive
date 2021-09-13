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
                                    <img src="{{ asset('admin/profilesettings/'.$admin->profile_photo) }}" class="float-right rounded-circle img-responsive" style="height:80px; width:80px;margin-top:20px;">
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
                    <div class="col-sm-10 mx-auto p-0 mt-3 text-center">
                        <button class="btn btn__next" type="submit">Update Profile </button>
                    </div>
                </div>
        </form>
    </div>
@endsection