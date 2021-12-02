@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="bg-light p-3 mt-2">
           Manage Home Slider
        </h4>
    </div>
    
     <div class="container mb-5">
     <br><br>

        <form action=" @if(isset($slider)) {{ route('adminslider.update', $slider->id) }} @else {{ route('adminslider.store') }} @endif" method="post" id="sliderRequest" enctype="multipart/form-data">
           @if(isset($slider))
           @method('PUT')
           @endif
            @csrf

            <div class="row">
                <div class="col-sm-10 mx-auto border p-0">
                    <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Slider  Information </strong>
                    </p>
                    <div class="col-sm-12 mt-2 p-4">
                        <div class="row mb-2">
                            
                                <div class="col-sm-4">
                                    <label class="label__wrapper required">Title One</label>
                                    <input type="text" name="title_one" class="form-control input__box--wrapper" value="@if(isset($slider->title_one)) {{ $slider->title_one }} @endif" >
                                    @if($errors->has('title_one'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('title_one') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-sm-4">
                                    <label class="label__wrapper required">Title Two</label>
                                    <input type="text" name="title_two" class="form-control input__box--wrapper" value="@if(isset($slider->title_two)) {{ $slider->title_two }} @endif" >
                                    @if($errors->has('title_two'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('title_two') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        <div class="col-sm-4">
                        <label class="label__wrapper ">Slider Photo </label><span class="imgsixeofspan">Size(1024*720px)</span>
                        <div class="custom-file">
                                <input type="file" name= @if(isset($slider->cover_photo)) {{"update_photo" }} @else {{ "cover_photo" }} @endif  id="cover_photo" class="form-control input__box--wrapper custom-file-input" id="team_profile" accept="image/*">
                                <span class="custom-file-label" for="validatedCustomFile">Choose team profile...</span>
                                @if($errors->has('cover_photo'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('cover_photo') }}</strong>
                                </span>
                                @endif
                            </div>
                      
                    </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-12">
                                    <label class="label__wrapper required">Content</label>
                                    <textarea  name="content" id="summernote" class="form-control input__box--wrapper" >@if(isset($slider->content)) {{ $slider->content }} @endif</textarea>
                                    @if($errors->has('content'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('content') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 mx-auto p-0 mt-3 text-center">
                        <button class="btn btn__next" type="submit">Submit </button>
                    </div>
                </div>
        </form>
    </div>
</div>
<script>
    $('#summernote').summernote({
      placeholder: 'Enter Official Partner Detail',
      tabsize: 2,
      height: 200
    });

 </script>
@endsection