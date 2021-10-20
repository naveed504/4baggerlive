@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="bg-light p-3 mt-2">
           About-Us Page
        </h4>
    </div>
    <div class="col-sm-12 text-right my-3">
       
    </div>
   


    <div class="col-sm-12 mt-3">
            <form action="{{route('aboutus.store') }}" method="post" id="" enctype="multipart/form-data">
               
                @csrf
               <input type="hidden" name="aboutusid" value="{{ $aboutus->id ?? ''}}">
                <div class="form-row">
                
                    <div class="form-group col-md-6 col__mr-right">
                        <label class="label__wrapper required" for="">About-Us Tagline</label>
                        <input type="text" class="form-control input__box--wrapper"  name="tagline" value="{{ $aboutus->tagline ?? '' }}"  placeholder="">
                        @if($errors->has('tagline'))
                            <span class="invalid-feedback">
                                <strong> {{$errors->first('tagline')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-3">
                </div>
                    <div class="form-group col-md-3 col__mr-right">
                    <img src="{{ asset('admin/allimages/'. $aboutus->image ?? '' )}}" style="height:50px;margin-top:30px;border-radius:5px;" >

                        <div class="form-row float-right" style="margin-top:30px;">
                            <div class="form-group col-md-8 col__mr-right mb-0">
                                <span class="btn btn__wrapper--four btn-file" id="btnfile">
                                     Image <input type="file" id="image"  name="image" >
                                </span>
                                
                            </div>
                         </div>
                        @error('image')<div class="error text-danger">{{ $message }}</div>@enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 col__mr-right">
                        <label class="label__wrapper required" for="">Mission Statement</label>
                        <textarea class="form-control input__box--wrapper"  name="mission_statment" value="{{ $aboutus->mission_statment ?? ''}}"  placeholder=""> {{ $aboutus->mission_statment ?? ''}}</textarea>
                        @if($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong> {{$errors->first('name')}}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6 col__mr-right">
                        <label class="label__wrapper required" for="">Content</label>
                        <textarea class="form-control input__box--wrapper"  name="content" value="{{ $aboutus->content ?? ''}}"  placeholder="">{{ $aboutus->content ?? ''}}</textarea>
                        @if($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong> {{$errors->first('name')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>
              
              
               
            <div class="text-center">
                <button class="btn btn__next" type="submit">submit</button>
            </div>
            </form>
        </div>
</div>
@endsection
