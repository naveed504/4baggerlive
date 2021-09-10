@extends('director.master')
@section('content')
    <div class="container mb-5">
        <div class="col-sm-12 mb-5">
            <h3 class="text-center p-4 heading-color">TEAM REGISTRATION</h3>
            <h5 class="text-center heading-color">BASEBALL TEAM</h5>
            <h5 class="text-center heading-color">FOR {{ date('Y') }} SEASON</h5>
        </div>
        <form action="{{ route('team.store') }}" method="post" id="dir_tem_reg">
            @csrf
        <div class="row">
            <div class="col-sm-10 mx-auto border p-0">
                <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Team Information</strong>
                </p>
                <div class="col-sm-12 mt-2 p-4">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Team Name</label>
                                <input type="text" name="team_name" class="form-control input__box--wrapper" value="{{ old('team_name') }}">
                                @if($errors->has('team_name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('team_name') }}</strong>
                                                        </span>
                                                    @endif
                            </div>
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Division</label>
                                <select name="division" class="form-control input__box--wrapper" value="{{ old('division') }}">
                                    <option selected disabled>--Select Division--</option>
                                    <option value="AA">AA</option>
                                    <option value="AAA">AAA</option>
                                    <option value="Majors">Majors</option>
                                </select>
                                @if($errors->has('division'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('division') }}</strong>
                                                        </span>
                                                    @endif
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Team City</label>
                                <input type="text" name="team_city" class="form-control input__box--wrapper" value="{{ old('team_city') }}">
                                @if($errors->has('team_city'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('team_city') }}</strong>
                                                        </span>
                                                    @endif
                            </div>
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Team State</label>
                                <select class="form-control input__box--wrapper down-icons" name="team_state" required="">
                                    <option disabled="" selected="" value="">--Select State--</option>
                                    @foreach($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('team_state'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('team_state') }}</strong>
                                                        </span>
                                                    @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Age Group</label>
                                <select class="form-control input__box--wrapper down-icons" name="age_group" required="">
                                    <option disabled="" selected="" value="">Age Group</option>
                                    <option value="5U"> 5U</option>
                                    <option value="6U"> 6U</option>
                                    <option value="7U"> 7U</option>
                                    <option value="8U"> 8U</option>
                                    <option value="9U"> 9U</option>
                                    <option value="10U">10U</option>
                                    <option value="11U">11U</option>
                                    <option value="12U">12U</option>
                                    <option value="13U">13U</option>
                                    <option value="14U">14U</option>
                                    <option value="15U">15U</option>
                                    <option value="16U">16U</option>
                                    <option value="17U">17U</option>
                                    <option value="18U">18U</option>
                                </select>
                                @if($errors->has('age_group'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('age_group') }}</strong>
                                                        </span>
                                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 mx-auto border p-0 mt-4">
                    <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                        <strong>Coach Information</strong>
                    </p>
                    <div class="col-sm-12 mt-2 p-4">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Coach Name</label>
                                <input type="text" name="name" class="form-control input__box--wrapper" value="{{ old('name') }}">
                                @if($errors->has('name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                            </div>
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Coach Email</label>
                                <input type="email" class="form-control input__box--wrapper" name="email" value="{{ old('email') }}">
                                @if($errors->has('email'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Coach Cell Number</label>
                                <input type="text" name="cell_no" class="form-control input__box--wrapper phoneNumber" value="{{ old('cell_no') }}">
                                @if($errors->has('cell_no'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('cell_no') }}</strong>
                                                        </span>
                                                    @endif
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Password</label>
                                <input type="password" name="password" class="form-control input__box--wrapper">
                                @if($errors->has('password'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                            </div>
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Confirm Password</label>
                                <input type="password" class="form-control input__box--wrapper" name="password_confirmation">
                                @if($errors->has('password_confirmation'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                        </span>
                                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 mx-auto border p-0 mt-4">
                    <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                        <strong>AGREEMENTS</strong>
                    </p>
                    <div class="col-sm-12 mt-2 p-4">
                        <div class="row mb-2">
                            <input type="checkbox" value="1" name="terms_agreement" class="mr-2 h-25">
                            <label for="">
                                I agree to the terms and conditions of FourBaager USA.
                            </label>
                            @if($errors->has('terms_agreement'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('terms_agreement') }}</strong>
                                                        </span>
                                                    @endif
                        </div>
                        <div class="row mb-2">
                            <input type="checkbox" value="2" name="site_agreement" class="mr-2 h-25">
                            <label for="">
                                By checking this box, I agree to comply with the FourBagger Website Agreement
                            </label>
                            @if($errors->has('site_agreement'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('site_agreement') }}</strong>
                                                        </span>
                                                    @endif
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 mx-auto p-0 mt-3 text-center">
                    <button class="btn btn__next" type="submit">Register Team</button>
                </div>
            </div>
        </form>
    </div>
@endsection
