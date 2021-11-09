@extends('admin.master')
@section('content')
    <div class="row pb-5">
        <div class="col-sm-12">
            <h4 class="bg-light p-3">
                Edit Director
            </h4>
        </div>

        <div class="col-sm-12 mt-3">
            <form action="{{route('director.update', $director->id)}}" method="post" id="director_registration_form">
                @method('PUT')
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6 col__mr-right">
                        <label class="label__wrapper required" for="">Company name</label>
                        <input type="text" class="form-control input__box--wrapper"  name="name" value="{{ $director->name }}"  placeholder="" @if(Auth::user()->type == 1) disabled @endif required>
                        @if($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong> {{$errors->first('name')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div>
                    <label for="" class="label__wrapper required">Address</label>
                    <div class="form-row">
                        <div class="form-group col-md-3 col__mr-right">
                            <label class="label__wrapper required" for="">Street</label>
                            <input type="text" class="form-control input__box--wrapper" name="address" value="{{ $director->director->street ?? '' }}" placeholder="" @if(Auth::user()->type == 1) disabled @endif required>
                            @if($errors->has('address'))
                                <span class="invalid-feedback">
                                    <strong> {{$errors->first('address')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-3 col__mr-right">
                            <label class="label__wrapper required" for="">City</label>
                            <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ $director->director->city ?? '' }}" @if(Auth::user()->type == 1) disabled @endif  name="city" required>
                            @if($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong> {{$errors->first('name')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-3 col__mr-right">
                            <label class="label__wrapper required" for="">State</label>

                            <select  class="form-control  input__box--wrapper down-icons" value="" name="state" required  @if(Auth::user()->type == 1) disabled @endif>

                                @foreach($states as $state)
                                    <option value="{{ $state->id }}" @if($director->director->state_id == $state->id) selected @endif>{{ $state->state_name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('state'))
                                <span class="invalid-feedback">
                                    <strong> {{$errors->first('state')}}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-3 col__mr-right">
                            <label class="label__wrapper required" for="">Zip Code</label>
                            <input type="number" class="form-control input__box--wrapper" @if(Auth::user()->type == 1) disabled @endif  placeholder="" value="{{ $director->director->zipcode ?? '' }}" name="zip_code" required>
                            @if($errors->has('zip_code'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('zip_code') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 col__mr-right">
                        <label class="label__wrapper required" for="">director cell number</label>

                        <input type="text" class="form-control input__box--wrapper" @if(Auth::user()->type == 1) disabled @endif value="{{ $director->cell_number }}"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="cell_no" required>
                        @if($errors->has('cell_no'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('cell_no') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6 col__mr-right">
                        <label class="label__wrapper required" for="">director email</label>
                        <input type="email" class="form-control input__box--wrapper" @if(Auth::user()->type == 1) disabled @endif  placeholder="" value="{{ $director->email }}" name="email" required>
                        @if($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 col__mr-right">
                        <label class="label__wrapper required" for="">Tax id </label>
                        <input type="number" class="form-control input__box--wrapper" @if(Auth::user()->type == 1) disabled @endif  placeholder="" value="{{ $director->director->tax_id ?? '' }}" name="tax_id" required>
                        @if($errors->has('tax_id'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('tax_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="mb-2">
                    <label class="label__wrapper required" for="">The following is where we will deposit all of your team entry Fees: </label>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col__mr-right">
                        <label class="label__wrapper required" for="">name on checking account</label>
                        <input type="text" class="form-control input__box--wrapper"  placeholder="" @if(Auth::user()->type == 1) disabled @endif value="{{ $director->director->account_name }}" name="name_of_checkingaccount" required>
                        @if($errors->has('name_of_checkingaccount'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name_of_checkingaccount') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 col__mr-right">
                        <label class="label__wrapper required" for="">DDA/CHECKING ACCOUNT? </label>
                        <input type="text" class="form-control input__box--wrapper"  placeholder="" @if(Auth::user()->type == 1) disabled @endif value="{{ $director->director->dda_checking_account }}" name="dda_checking_account" required>
                        @if($errors->has('dda_checking_account'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('dda_checking_account') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6 col__mr-right">
                        <label class="label__wrapper required" for="">Confirm DDA/CHECKING ACCOUNT
                        </label>
                        <input type="text" class="form-control input__box--wrapper"  placeholder="" @if(Auth::user()->type == 1) disabled @endif value="{{ $director->director->dda_checking_account }}" name="dda_checking_account_confirmation" required>
                        @if($errors->has('dda_checking_account_confirmation'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('dda_checking_account_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 col__mr-right">
                        <label class="label__wrapper required" for=""> routing number </label>
                        <input type="number" class="form-control input__box--wrapper"  placeholder="" @if(Auth::user()->type == 1) disabled @endif value="{{ $director->director->dd_routingno }}" name="routing_no" required>
                        @if($errors->has('routing_no'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('routing_no') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6 col__mr-right">
                        <label class="label__wrapper required" for="">Confirm routing number </label>
                        <input type="number" class="form-control input__box--wrapper"  placeholder="" @if(Auth::user()->type == 1) disabled @endif value="{{ $director->director->dd_routingno }}" name="routing_no_confirmation" required>
                        @if($errors->has('routing_no_confirmation'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('routing_no_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                @for($i = 0; $i < count(json_decode($director->director->name_of_field)); $i++)
                    <div class="form-row" id="sec2">
                        <div class="form-group col-sm-12">
                            <label class="label__wrapper required">Please complete the following info for each field/complex where you throw tournaments. </label>
                        </div>
                        <div class="form-group col-md-6 col__mr-right">
                            <label class="label__wrapper required" for="">Name of Field/Complex </label>
                            <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ json_decode($director->director->name_of_field)[$i] }}" name="name_of_field[]" required>
                            @if($errors->has('name_of_field[]'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name_of_field[]') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6 col__mr-right">
                            <label class="label__wrapper required" for="">Number of Fields </label>
                            <input type="number" class="form-control input__box--wrapper"  placeholder="" value="{{ json_decode($director->director->no_of_field)[$i] }}" name="no_of_field[]" required>
                            @if($errors->has('no_of_fields'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('no_of_fields') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-row" id="sec3">
                        <div class="form-group col-sm-12">
                            <label class="label__wrapper required">City and State where Fields/Complex are located</label>
                        </div>
                        <div class="form-group col-md-6 col__mr-right">
                            <label class="label__wrapper" for="">State </label>
                            <select  class="form-control  input__box--wrapper down-icons" name="field_state[]" required>
                                <option disabled="" selected value="">select state</option>
                                @foreach($states as $state)
                                    <option value="{{ $state->id }}" @if(json_decode($director->director->field_state)[$i] == $state->id) selected @endif>{{ $state->state_name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('field_state[]'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('field_state[]') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6 col__mr-right" id="addmore">
                            <label class="label__wrapper" for="">City</label>
                            <input type="text" class="form-control input__box--wrapper" placeholder="" value="{{ json_decode($director->director->field_city)[$i] }}" name="field_city[]" required>
                            @if($errors->has('field_city[]'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('field_city[]') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                @endfor
                <button class="btn btn-xs btn__next margin-b-20 mt-1" onclick="addMore()" type="button">Add More</button>
                 <div class="form-row">
                    <div class="form-group col-md-6 col__mr-right">
                        <label class="label__wrapper" for="">password </label>
                        <input type="password" name="password" class="form-control input__box--wrapper" placeholder="">
                        @if($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-md-6 col__mr-right">
                        <label class="label__wrapper" for="">confirm password </label>
                        <input type="password" class="form-control input__box--wrapper" name="password_confirmation" placeholder="">
                        @if($errors->has('password_confirmation'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
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
