@extends('admin.master')
@section('content')
<div class="row">
<div class="col-sm-12">
        <h4 class="bg-light p-3 mt-2">
           Manage Policy Rules
        </h4>
    </div>
     <div class="container mb-5">
         <br><br>
        
        <form action=" @if(isset($siterule)) {{ route('siterule.update', $siterule->id) }} @else {{ route('siterule.store') }} @endif" method="post"  >
           @if(isset($siterule))
           @method('PUT')
           @endif
            @csrf

            <div class="row">
                <div class="col-sm-10 mx-auto border p-0">
                    <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Rules  Information </strong>
                    </p>
                    <div class="col-sm-12 mt-2 p-4">
                       

                            <div class="row mb-2">
                                <div class="col-sm-12">
                                    <label class="label__wrapper required">Content</label>
                                    <textarea  name="rule" class="form-control input__box--wrapper" >@if(isset($siterule->rule)) {{ $siterule->rule }} @endif</textarea>
                                    @error('rule')
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
@endsection