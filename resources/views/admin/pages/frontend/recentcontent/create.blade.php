@extends('admin.master')
@section('content')
<div class="row">
     <div class="col-sm-12">
            <h4 class="bg-light p-3 mt-2">
            Create  Recent Content Section
            </h4>
    </div>
     <div class="container mb-5">
       <br><br>
        <form action="  {{ route('recentcontent.store') }} " method="post" id="" enctype="multipart/form-data">
          
            @csrf

            <div class="row">
                <div class="col-sm-10 mx-auto border p-0">
                    <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Home Section  Information </strong>
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
                                <label class="label__wrapper ">Home Section Photo </label>
                                   <div class="custom-file">
                                <input type="file" name= "image"  id="image" class="form-control input__box--wrapper custom-file-input"  accept="image/*">
                                <span class="custom-file-label" for="validatedCustomFile">Choose Recent Image...</span>
                                @error('image')
                                    <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
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
</div>
    <script>
        $('#summernote').summernote({
          placeholder: 'Please Enter Some Detail',
          tabsize: 2,
          height: 200
        });
      
      </script>
@endsection
