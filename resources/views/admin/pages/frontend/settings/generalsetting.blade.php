@extends('admin.master')
@section('content')
<div class="container mb-5">
        <div class="col-sm-12 mb-5">
            <h3 class="text-center p-4 heading-color">General Setting</h3>
        </div>
        <form action="{{ route('updategeneralsetting') }}" method="post" id="generalprofilesetting" enctype="multipart/form-data">
           
            @csrf
            <input type="hidden" name="general_id" value={{ $generalSetting->id  ?? ''}}>
                <div class="row">
                    <div class="col-sm-10 mx-auto border p-0">
                        <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                        <strong>Manage  Social Information </strong>
                        </p>                   
                        <div class="col-sm-12 mt-2 p-4">
                            <div class="row mb-2">
                           
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Facebook</label>
                                    <input type="url" name="facebook" placeholder="http://" class="form-control input__box--wrapper" value="{{ $generalSetting->facebook ?? ''}}" >
                                   
                                </div>
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Twitter</label>
                                    <input type="url" name="twitter" placeholder="http://" class="form-control input__box--wrapper" value="{{ $generalSetting->twitter  ?? '' }}" >
                                   
                                </div>
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Instagram</label>
                                    <input type="url" name="instagram" placeholder="http://" class="form-control input__box--wrapper" value="{{ $generalSetting->instagram  ?? '' }}" >
                                   
                                </div>
                               
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Google </label>
                                    <input type="url" name="google" placeholder="http://" class="form-control input__box--wrapper" value="{{ $generalSetting->google   ?? ''}}" >
                                   
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
                <div class="row">
                    <div class="col-sm-10 mx-auto border p-0">
                        <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                        <strong>4 Bagger Mission Information </strong>
                        </p>                   
                        <div class="col-sm-12 mt-2 p-4">
                            <div class="row mb-2">                           
                                <div class="col-sm-4">
                                    <label class="label__wrapper required">Mission Title</label>
                                    <input type="text" name="mission_title" class="form-control input__box--wrapper" value="{{ $generalSetting->mission_title ?? '' }}" >
                                </div>
                                <div class="col-sm-4">
                                <label class="label__wrapper ">Background Image </label><span class="imgsixeofspan">Size(1024*720px)</span>
                                   <div class="custom-file">
                                <input type="file" name= "mission_bgimg"   class="form-control input__box--wrapper custom-file-input"  accept="image/*">
                                <span class="custom-file-label" for="validatedCustomFile">Choose Image...</span>
                                @error('mission_bgimg')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                                </div>
                                <div class="col-sm-4">
                                    <label class="label__wrapper required">Image Title </label>
                                    <input type="text" name="mission_bgimgtitle" class="form-control input__box--wrapper" value="{{ $generalSetting->mission_bgimgtitle  ?? ''}}">                                  
                                </div> 
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Mission Statment</label>
                                    <textarea type="text" name="mission_statment" class="form-control input__box--wrapper" >{{ $generalSetting->mission_statment  ?? ''}}</textarea>
                                </div>   
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Image content</label>
                                    <textarea type="text" name="mission_bgimgcontent" class="form-control input__box--wrapper" >{{ $generalSetting->mission_bgimgcontent ?? '' }}</textarea>
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