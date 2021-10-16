@extends('admin.master')
@section('content')
<div class="container mb-5">
        <div class="col-sm-12 mb-5">
            <h3 class="text-center p-4 heading-color">Manage Privacy Rules</h3>
        </div>
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
                                    @if($errors->has('rule'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('rule') }}</strong>
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
@endsection