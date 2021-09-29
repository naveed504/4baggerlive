@extends('admin.master')
@section('content')
<div class="container mb-5">
        <div class="col-sm-12 mb-5">
            <h3 class="text-center p-4 heading-color">Create  Home Blog Section</h3>
        </div>
        <form action="  {{ route('manageblog.store') }} " method="post" id="" enctype="multipart/form-data">
          
            @csrf

            <div class="row">
                <div class="col-sm-10 mx-auto border p-0">
                    <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Blog Information </strong>
                    </p>
                    <div class="col-sm-12 mt-2 p-4">
                        <div class="row mb-2">
                            
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Title </label>
                                    <input type="text" name="title" class="form-control input__box--wrapper"  >
                                    @error('title')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-row float-right" style="margin-top:30px;">
                                        <div class="form-group col-md-8 col__mr-right mb-0">
                                            <span class="btn btn__wrapper--four btn-file" id="btnfile">
                                                Cover Photo <input type="file" id="image"  name="image" >
                                            </span>
                                            
                                        </div>
                                    </div>
                                    @error('image')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                               
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-12">
                                    <label class="label__wrapper required">Content</label>
                                    <textarea  name="detail" class="form-control input__box--wrapper" id="summernote" ></textarea>
                                    @error('detail')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
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
    <script>
        $('#summernote').summernote({
          placeholder: 'Enter Official Partner Detail',
          tabsize: 2,
          height: 200
        });
      
      </script>
@endsection
