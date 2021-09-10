@extends('admin.master')
@section('content')
<div class="container mb-5">
        <div class="col-sm-12 mb-5">
            <h3 class="text-center p-4 heading-color">Event Service Fee</h3>
        </div>
        <form action="{{ route('servicefee.update', $fees->id) }}" method="post" id="">
            @method('PUT')
            @csrf

            <div class="row">
                <div class="col-sm-10 mx-auto border p-0">
                    <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Service Fee  Information </strong>
                    </p>
                    <div class="col-sm-12 mt-2 p-4">
                        <div class="row mb-2">
                            <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <label class="label__wrapper required">Service Amount</label>
                                    <input type="number" name="servicefee" class="form-control input__box--wrapper" value="{{ $fees->servicefee }}" >
                                    @if($errors->has('servicefee'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('servicefee') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 mx-auto p-0 mt-3 text-center">
                        <button class="btn btn__next" type="submit">Update Service Fee</button>
                    </div>
                </div>
        </form>
    </div>
@endsection