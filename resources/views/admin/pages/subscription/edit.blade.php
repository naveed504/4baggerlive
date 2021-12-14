@extends('admin.master')
@section('content')
<div class="row">
     <div class="col-sm-12">
            <h4 class="bg-light p-3 mt-2">
            Update Subscription Plan
            </h4>
    </div>
    <div class="container mb-5">
<br><br>
        <form action="  {{ route('subscription.update', $data->id ) }} " method="post" id="" enctype="multipart/form-data">
            @csrf
            @method('PUT')
           

            <div class="row">
                <div class="col-sm-10 mx-auto border p-0">
                    <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Subscription Plan </strong>
                    </p>
                    <div class="col-sm-12 mt-2 p-4">
                        <div class="row mb-2">
                            
                                <div class="col-sm-6">
                                  <label class="label__wrapper required">Type</label>
                                    <select name="package_type" class="form-control input__box--wrapper">
                                        <option selected="" disabled="">--Select Type--</option>
                                        <option value="1" @if($data->plan_type == 1) selected @endif>1 Month</option>
                                        <option value="3" @if($data->plan_type == 3) selected @endif>3 Months</option>
                                        <option value="6" @if($data->plan_type == 6) selected @endif>6 Months</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                   <label class="label__wrapper required">Price</label>
                                    <input type="number" value="{{$data->plan_amount}}" name="package_price" class="form-control input__box--wrapper @error('package_price') is-invalid @enderror">
                                    @error('package_price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                  
                                </div>
                               
                               
                            </div>
                            <div class="row mb-2">
    <div class="col-sm-10">
        <div id="package_description_row">
        @php
                $desc = json_decode($data->plan_des);
            @endphp
            @foreach ($desc as $value)
            <div class="row">
                <div class="col-sm-12 mb-2">
                <label class="label__wrapper required ml-3">Description</label>

                    <input type="text" value="{{$value}}" name="package_description[]" class="form-control input__box--wrapper" required>
                </div>
            </div>
            @endforeach
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
      <script>
      const addmoreFields = () => {
        let section2 = document.getElementById('package_description_row');
        let divId = Math.floor(Math.random() * 11);
        document.getElementById('package_description_row').insertAdjacentHTML('afterend', "<div id=" + divId + " class='enclosing'>" + "<div class='form-row flex__left'><button class='btn btn-xs btn-danger close_btn' type='button' onclick='removeAdded(" + divId + ")' style='margin-left:5px; margin-bottom:6px;'>&times;</button></div>" + section2.outerHTML + "</div>")
    }
    // remove added HTML fields on registration page
const removeAdded = (id) => {
    document.getElementById(id).remove();
}
      </script>
@endsection
