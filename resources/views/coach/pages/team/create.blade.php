@extends('coach.master')
@section('content')
    <div class="container mb-5">
        <div class="col-sm-12 mb-5">
            <h3 class="text-center p-4 heading-color">TEAM REGISTRATION</h3>
            <h5 class="text-center heading-color">BASEBALL TEAM </h5>
            <h5 class="text-center heading-color">FOR {{ date('Y') }} SEASON</h5>
        </div>
        <form action="{{ route('teams.store') }}" method="post" id="reg_coach_team" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-sm-10 mx-auto border p-0">
                <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">

                   <strong>Team Information </strong>
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
                                    @foreach($agegroups as $agegroup)
                                         <option value="{{ $agegroup->id }}"> {{ $agegroup->age_group }}</option>
                                    @endforeach

                                </select>
                                @if($errors->has('age_group'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('age_group') }}</strong>
                                        </span>
                                                    @endif
                            </div>

                            <div class="col-sm-6">
                                <div class="wrapper--append">
                                    <label class="label__wrapper required">Team Profile</label><span class="imgsixeofspan">Size(1024*720px)</span>
                                    <div class="custom-file">
                                        <input type="file" name="team_profile" class="form-control input__box--wrapper custom-file-input" id="team_profile" accept="image/*">
                                        <span class="custom-file-label" for="validatedCustomFile">Choose team profile...</span>
                                        @if($errors->has('team_profile'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('team_profile') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
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
