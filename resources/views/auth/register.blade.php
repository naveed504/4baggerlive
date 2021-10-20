@extends('frontend.master')
@section('content')
       <section class="space__tp--wrapper">
        <div class="container">
            <div class="text-center space__tp--wrapper2">
                <h3 class="heading__wraper-three">Register</h3>
            </div>
            <section class="player-reg">
                <ul class="nav nav-tabs bagger-pills">
                    <li>
                        <a href="#tab1" class="active" data-toggle="tab">Tournament director registration</a>
                    </li>
                    <li><a href="#tab2" data-toggle="tab">Team registration</a></li>
                    <li><a href="#tab3" data-toggle="tab">Player registration</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseOne">
                                        Tournament director registration
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                        @if(Session::has('alert-' . $msg))
                                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                            </p>
                                        @endif
                                    @endforeach
                                    <div class="form__mainwrapper">
                                       <form action="{{route('register')}}" method="post" id="director_registration_form">
                                            @csrf
                                        <input type="hidden" name="type" value="2">
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Director name</label>
                                                    <input type="text" class="form-control input__box--wrapper"  name="director_name" value="{{ old('director_name') }}"  placeholder="" required>
                                                    @if($errors->has('director_name'))
                                                        <span class="invalid-feedback">
                                                            <strong> {{$errors->first('director_name')}}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Company name</label>
                                                    <input type="text" class="form-control input__box--wrapper"  name="name" value="{{ old('name') }}"  placeholder="" required>
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
                                                        <input type="text" class="form-control input__box--wrapper" name="address" value="{{ old('address') }}" placeholder="" required>
                                                        @if($errors->has('address'))
                                                            <span class="invalid-feedback">
                                                                <strong> {{$errors->first('address')}}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-3 col__mr-right">
                                                        <label class="label__wrapper required" for="">City</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('city') }}"  name="city" required>
                                                        @if($errors->has('name'))
                                                            <span class="invalid-feedback">
                                                                <strong> {{$errors->first('name')}}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-3 col__mr-right">
                                                        <label class="label__wrapper required" for="">State</label>
                                                        <select  class="form-control  input__box--wrapper down-icons" value="" name="state" required >
                                                            <option  disabled="" selected value="">select state</option>
                                                            @foreach($states as $state)
                                                                <option value="{{ $state->id }}">{{ $state->state_name }}</option>
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
                                                        <input type="number" class="form-control input__box--wrapper"  placeholder="" value="{{ old('zip_code') }}" name="zip_code" required>
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

                                                    <input type="text" class="form-control input__box--wrapper phoneNumber" value="{{ old('cell_no') }}"   name="cell_no" required>
                                                    @if($errors->has('cell_no'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('cell_no') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">director email</label>
                                                    <input type="email" class="form-control input__box--wrapper"  placeholder="" value="{{ old('email') }}" name="email" required>
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
                                                    <input type="number" class="form-control input__box--wrapper"  placeholder="" value="{{ old('tax_id') }}" name="tax_id" required>
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
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('name_of_checkingaccount') }}" name="name_of_checkingaccount" required>
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
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('dda_checking_account') }}" name="dda_checking_account" required>
                                                    @if($errors->has('dda_checking_account'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('dda_checking_account') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Confirm DDA/CHECKING ACCOUNT
                                                    </label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('dda_checking_account_confirmation') }}" name="dda_checking_account_confirmation" required>
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
                                                    <input type="number" class="form-control input__box--wrapper"  placeholder="" value="{{ old('routing_no') }}" name="routing_no" required>
                                                    @if($errors->has('routing_no'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('routing_no') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Confirm routing number </label>
                                                    <input type="number" class="form-control input__box--wrapper"  placeholder="" value="{{ old('routing_no_confirmation') }}" name="routing_no_confirmation" required>
                                                    @if($errors->has('routing_no_confirmation'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('routing_no_confirmation') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row" id="sec2">
                                                <div class="form-group col-sm-12">
                                                    <label class="label__wrapper required">Please complete the following info for each field/complex where you throw tournaments. </label>
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Name of Field/Complex </label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old("name_of_field[]") }}" name="name_of_field[]" required>
                                                    @if($errors->has('name_of_field[]'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('name_of_field[]') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Number of Fields </label>
                                                    <input type="number" class="form-control input__box--wrapper"  placeholder="" value="{{ old('no_of_fields[]') }}" name="no_of_field[]" required>
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
                                                            <option value="{{ $state->id }}">{{ $state->state_name }}</option>
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
                                                    <input type="text" class="form-control input__box--wrapper" placeholder="" value="{{ old("field_city[]") }}" name="field_city[]" required>
                                                    @if($errors->has('field_city[]'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('field_city[]') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <button class="btn btn-xs btn__add mt-1" onclick="addMore()" type="button">Add More</button>
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
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseTwo">
                                        Team registration
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="form__mainwrapper">
                                       <div class="form__mainwrapper">
                                        <form action="{{route('register')}}" method="post"  id="team_registration_form">
                                            @csrf
                                        <input type="hidden" name="type" value="3">
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Team Name</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('team_name') }}" name="team_name" required>
                                                    @if($errors->has('team_name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('team_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Head coach name
                                                    </label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('name') }}" name="name" required>
                                                    @if($errors->has('name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Team City </label>
                                                    <input type="tel" class="form-control input__box--wrapper" placeholder="" value="{{ old('t_city') }}" name="t_city" required>
                                                    @if($errors->has('t_city'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('t_city') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for=""> Team State </label>
                                                    <select  class="form-control  input__box--wrapper down-icons" name="t_state" required>
                                                        @foreach($states as $state)
                                                            <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->has('t_state'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('t_state') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Head Coach Cell
                                                        #</label>
                                                    <input type="text" class="form-control input__box--wrapper phoneNumber" placeholder="" value="{{ old('cell_no') }}" name="cell_no" required>
                                                    @if($errors->has('cell_no'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('cell_no') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Head Coach Email
                                                    </label>
                                                    <input type="email" class="form-control input__box--wrapper" placeholder="" value="{{ old('email') }}" name="email" required>
                                                    @if($errors->has('email'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Age Group </label>
                                                    <select  class="form-control  input__box--wrapper down-icons" name="age_group" required >
                                                        <option disabled="" selected value="">Age Group</option>
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
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Division </label>
                                                    <select  class="form-control  input__box--wrapper down-icons" name="division" required>
                                                        <option disabled="" selected value="">Select Division</option>
                                                        <option value="AA">AA</option>
                                                        <option value="AAA">AAA</option>
                                                        <option value="Majors">Majors</option>
                                                        <option value="Showcase">Showcase</option>
                                                        <option value="High School">High School</option>
                                                    </select>
                                                    @if($errors->has('division'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('division') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                                 <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper" for="">password </label>
                                                    <input type="password" name="password" class="form-control input__box--wrapper" placeholder="" required>
                                                    @if($errors->has('password'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper" for="">confirm password </label>
                                                    <input type="password" class="form-control input__box--wrapper" name="password_confirmation"  required placeholder="">
                                                    @if($errors->has('password_confirmation'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn__next">submit</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseThree">
                                        Player registration
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="form__mainwrapper">
                                          <form action="{{route('register')}}" method="post" enctype="multipart/form-data" id="player_registration_form">
                                            @csrf
                                                <input type="hidden" name="type" value="4">
                                                <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Player Email</label>
                                                    <input type="email" class="form-control input__box--wrapper"  placeholder="" value="{{ old('email') }}" name="email" required>
                                                    @if($errors->has('email'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Player First
                                                        Name</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('name') }}" name="first_name" required>
                                                    @if($errors->has('name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Player Last
                                                        Name</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('last_name') }}" name="last_name" required>
                                                    @if($errors->has('last_name'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('last_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div>
                                                <label class="label__wrapper required" for="">Player Home Address</label>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4 col__mr-right">
                                                    <label class="label__wrapper required" for="">City</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('p_city') }}" name="p_city" required>
                                                    @if($errors->has('p_city'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('p_city') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4 col__mr-right">
                                                    <label class="label__wrapper required" for="">state</label>
                                                    <select  class="form-control  input__box--wrapper down-icons" name="p_state" required>
                                                        <option selected="" disabled="" value="">Select State</option>
                                                            @foreach($states as $state)
                                                                <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                                            @endforeach
                                                    </select>
                                                    @if($errors->has('p_state'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('p_state') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4 col__mr-right">
                                                    <label class="label__wrapper required" for="">Zip Code</label>
                                                    <input type="number" class="form-control input__box--wrapper"  placeholder="" value="{{ old('zip_code') }}" name="zip_code" required>
                                                    @if($errors->has('zip_code'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('zip_code') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="">High School Name (if applicable) </label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('school') }}" name="school" >
                                                    @if($errors->has('school'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('school') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Player Cell Phone # </label>
                                                    <input type="text" class="form-control input__box--wrapper phoneNumber"   placeholder="" value="{{ old('cell_no') }}" name="cell_no" required>
                                                    @if($errors->has('cell_no'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('cell_no') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 col__mr-right">
                                                    <label class="label__wrapper required" for="">DOB</label>
                                                <div class="flex__cotent--wrapper">
                                                        <div class="mr__right20">
                                                            <label class="label__wrapper required" for="">Month </label>
                                                            <select class="form-control  input__box--wrapper down-icons" name="month">
                                                                <option selected="" value="" disabled="">-- Month --</option>
                                                                @for($i = 1; $i < 13; $i++ )
                                                                    <option value="{{ $i }}">{{ date("F", mktime(0, 0, 0, $i, 10)) }}</option>
                                                                @endfor
                                                            </select>
                                                            @if($errors->has('month'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('month') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="mr__right20">
                                                            <label class="label__wrapper required" for="">Day </label>
                                                            <select class="form-control input__box--wrapper down-icons" name="day" required >
                                                                <option selected disabled="" value="">day</option>
                                                                @for($i=1; $i< 32  ; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                            </select>
                                                            @if($errors->has('day'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('day') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                         @php
                                                            $currentYear = date('Y');
                                                            $lastYear = date('Y', strtotime('-80 years'));
                                                        @endphp
                                                        <div class="mr__right20">
                                                            <label class="label__wrapper required" for="">Year </label>
                                                            <select  class="form-control  input__box--wrapper down-icons" name="year" required>
                                                                <option disabled="" selected="" value="">year</option>
                                                                @for($i=$lastYear; $i<$currentYear; $i++)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                                @endfor
                                                            </select>
                                                            @if($errors->has('year'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('year') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Graduation Year</label>
                                                    @php
                                                        $currentyear1= date('Y',strtotime('+10 years'));
                                                        $getyear=date('Y',strtotime('-50 year'));
                                                    @endphp
                                                    <select  class="form-control  input__box--wrapper down-icons" name="graduation_year" required>
                                                        <option selected disabled="" value="">select year</option>
                                                        @for($i=$getyear; $i<$currentyear1; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                    @if($errors->has('graduation_year'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('graduation_year') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="">College Commitment</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="Uncommitted" value="{{ old('college_commit') }}" name="college_commit" >
                                                    @if($errors->has('college_commit'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('college_commit') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Player Height </label>
                                                    <select  class="form-control  input__box--wrapper down-icons" value="{{ old('height') }}" name="height" required>
                                                        <option value="" disabled="" selected="">Select Height </option>
                                                        <option value="4">4'</option>
                                                        <option value="5">5'</option>
                                                        <option value="6">6'</option>
                                                    </select>
                                                    @if($errors->has('height'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('height') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for=""> </label>
                                                    <select  class="form-control  input__box--wrapper down-icons" name="inches" required>
                                                        <option selected="" value="" disabled="">Inches</option>
                                                        <option value="1">1"</option>
                                                        <option value="2">2"</option>
                                                        <option value="3">3"</option>
                                                        <option value="4">4"</option>
                                                        <option value="5">5"</option>
                                                        <option value="6">6"</option>
                                                        <option value="7">7"</option>
                                                        <option value="8">8"</option>
                                                        <option value="9">9"</option>
                                                        <option value="10">10"</option>
                                                        <option value="11">11"</option>
                                                    </select>
                                                    @if($errors->has('inches'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('inches') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Player Weight Fill In
                                                    </label>
                                                    <input type="number" class="form-control input__box--wrapper"  placeholder="" value="{{ old('weight') }}" name="weight" required>
                                                    @if($errors->has('weight'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('weight') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Throw </label>
                                                    <select  class="form-control  input__box--wrapper down-icons" name="throw" required>
                                                        <option disabled="" value="" selected="">Select Options </option>
                                                        <option value="Left">Left </option>
                                                        <option value="Right">Right </option>
                                                        <option value="Both">Both</option>
                                                    </select>
                                                    @if($errors->has('throw'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('throw') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Bat</label>
                                                    <select  class="form-control  input__box--wrapper down-icons" name="bat" required>
                                                        <option disabled="" value=""  selected="">Select Options</option>
                                                        <option  value="Right">Right </option>
                                                        <option  value="Left">Left </option>
                                                        <option  value="Both">Both</option>
                                                    </select>
                                                    @if($errors->has('bat'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('bat') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">PRIMARY POSITION </label>
                                                    <select  class="form-control  input__box--wrapper down-icons" name="primary_position" required>
                                                        <option selected="" value="" disabled=""> Select POSITION </option>
                                                        <option  value="C"> C </option>
                                                        <option value="1B"> 1B</option>
                                                        <option value="2ND"> 2ND</option>
                                                        <option value="SS"> SS</option>
                                                        <option value="3B"> 3B</option>
                                                        <option value="OF"> OF</option>
                                                        <option value="RHP"> RHP</option>
                                                        <option value="LHP"> LHP</option>

                                                    </select>
                                                    @if($errors->has('primary_position'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('primary_position') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Secondary POSITION </label>
                                                    <select class="form-control  input__box--wrapper down-icons" name="secondary_possition" required>
                                                        <option selected="" value="" disabled=""> Select POSITION </option>
                                                        <option  value="C"> C </option>
                                                        <option value="1B"> 1B</option>
                                                        <option value="2ND"> 2ND</option>
                                                        <option value="SS"> SS</option>
                                                        <option value="3B"> 3B</option>
                                                        <option value="OF"> OF</option>
                                                        <option value="RHP"> RHP</option>
                                                        <option value="LHP"> LHP</option>
                                                    </select>
                                                    @if($errors->has('secondary_position'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('secondary_position') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="wrapper--append">
                                                <div class="form-row" id="parentinfo">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper required" for="">Parent First Name</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('parent_firstname[]') }}" name="parent_firstname[]" required>
                                                        @if($errors->has('parent_firstname[]'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('parent_firstname[]') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper required" for="">Parent Last Name</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('parent_lastname') }}" name="parent_lastname[]" required>
                                                        @if($errors->has('parent_lastname[]'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('parent_lastname[]') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row" id="parentcontact">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Parent Cell # (For Each Parent)</label>
                                                    <input type="text"  class="form-control input__box--wrapper phoneNumber"  placeholder="" value="{{ old('parent_cellno[]') }}" name="parent_cellno[]" required>
                                                    @if($errors->has('parent_cellno[]'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('parent_cellno[]') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper required" for="">Parent Email (For Each Parent)</label>
                                                    <input type="email" class="form-control input__box--wrapper"  placeholder="" value="{{ old('parent_email[]') }}" name="parent_email[]" required>
                                                    @if($errors->has('parent_email[]'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('parent_email[]') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button class="btn btn-xs btn__add flex__right my-2" type="button" onclick="addParentInfo('parentcontact')">Add Additional Parent Info</button>
                                            </div>
                                          
                                            <div class="wrapper--append">
                                                <div class="form-row" id="parentinfo">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                    <div class="form-row align-items-center">
                                                    <span class="btn btn__wrapper--four btn-file" id="btnfile">
                                                        Upload Picture <input type="file" id="uploadfile" name="fileupload" accept="image/*">
                                                        @if($errors->has('fileupload'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('fileupload') }}</strong>
                                                            </span>
                                                        @endif
                                                    </span>
                                            </div>
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <span class="btn btn__wrapper--four btn-file" id="btnfile">
                                                            Upload Video <input type="file" id="uploadfile" name="player_video" >
                                                            @if($errors->has('fileupload'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('fileupload') }}</strong>
                                                                </span>
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <h3 class="social__heading">Social media information</h3>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12 col__mr-right">
                                                        <label class="label__wrapper" for="">Facebook </label>
                                                        <input type="url" class="form-control input__box--wrapper"  placeholder="http:// " value="{{ old('facebook') }}" name="facebook">
                                                        @if($errors->has('facebook'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('facebook') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-12 col__mr-right">
                                                        <label class="label__wrapper" for="">Twitter </label>
                                                        <input type="url" class="form-control input__box--wrapper"  placeholder="http:// " value="{{ old('twitter') }}"  name="twitter">
                                                        @if($errors->has('twitter'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('twitter') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-12 col__mr-right">
                                                        <label class="label__wrapper" for="">Instagram </label>
                                                        <input type="url" class="form-control input__box--wrapper"  placeholder="http:// " value="{{ old('instagram') }}" name="instagram">
                                                        @if($errors->has('instagram'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('instagram') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper" for="">password </label>
                                                    <input type="password" name="password" class="form-control  input__box--wrapper" required>
                                                    @if($errors->has('password'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper" for="">confirm password </label>
                                                    <input type="password" name="password_confirmation" class="form-control input__box--wrapper" required>
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
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <script src="{{ asset('js/site.js') }}"></script>
@endsection
