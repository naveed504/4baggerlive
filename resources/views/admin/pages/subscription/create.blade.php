@extends('admin.master')
@section('content')
<div class="row">
     <div class="col-sm-12">
            <h4 class="bg-light p-3 mt-2">
            Create Subscription Plan
            </h4>
    </div>
    <div class="container mb-5">
<br><br>
        <form action="  {{ route('subscription.store') }} " method="post" id="" enctype="multipart/form-data">
          
            @csrf
            <div class="row">
                <div class="col-sm-10 mx-auto border p-0">
                    <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Subscription Plan </strong>
                    </p>
                    <div class="col-sm-12 mt-2 p-4">
                        <div class="row mb-2">
                                <div class="col-sm-6">
                                  <label class="label__wrapper required">Type</label>
                                    <select name="plan_type" class="form-control input__box--wrapper">
                                        <option selected="" disabled="">--Select Type--</option>
                                        <option value="1">1 Month</option>
                                        <option value="3">3 Months</option>
                                        <option value="6">6 Months</option>
                                    </select>
                                    @error('plan_type')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                   <label class="label__wrapper required">Price</label>
                                    <input type="number" name="package_price" class="form-control input__box--wrapper @error('package_price') is-invalid @enderror">
                                    @error('package_price')
                                        <div class="error text-danger">{{ $message }}</div>
                                    @enderror
                                </div>                              
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-10">
                                    <div id="package_description_row">
                                        <div class="row">
                                            <div class="col-sm-12 mb-2">
                                            <label class="label__wrapper required ml-3">Description</label>

                                                <input type="text" name="package_description[]" class="form-control input__box--wrapper" required>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
    <div class="col-sm-2">
        <a class="btn btn-primary btn-sm add_package_description_row" onclick="addmoreFields()" style="margin-left:12px;font-size:19px;margin-top:33px;"><i class="fas fa-fw fa-plus "></i></a>
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
