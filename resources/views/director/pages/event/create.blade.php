@extends('director.master')
@section('content')
    <div class="container mb-5">
        <div class="col-sm-12 mb-5">
            <h3 class="text-center p-4 heading-color">EVENT REGISTRATION</h3>
            <h5 class="text-center heading-color">BASEBALL EVENT</h5>
        </div>

        <div class="row">
            <div class="col-sm-10 mx-auto border p-0">
                <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Event Information</strong>
                </p>
                <form action="{{ route('event.store') }}" enctype="multipart/form-data" method="post" id="createEvent" onsubmit="return submitForm(this, event);">
                    @csrf
                <div class="col-sm-12 mt-2 p-4">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <label class="label__wrapper required">Event Name</label>
                            <input type="text" name="event_name" class="form-control input__box--wrapper" value="{{ old('event_name') }}">
                            @if($errors->has('event_name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('event_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label class="label__wrapper required">Total Number Of Games</label>
                            <input type="number" name="total_matches" class="form-control input__box--wrapper" value="">
                            @if($errors->has('total_matches'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('total_matches') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <label class="label__wrapper required">Start Date</label>
                            <input type="date" name="start_date" class="form-control input__box--wrapper" value="{{ old('start_date')  }}">
                            @if($errors->has('start_date'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('start_date') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label class="label__wrapper required">End Date</label>
                            <input type="date" name="end_date" class="form-control input__box--wrapper" value="{{ old('end_date')}}">
                            @if($errors->has('end_date'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('end_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-2">

                        <div class="col-sm-6">
                            <label class="label__wrapper required">Age Group</label>
                            <select class="form-control input__box--wrapper down-icons" id="js-example-basic-multiple"  multiple name="age_group[]" required>
                                @foreach($ageGroups as $agegroup)
                                <option value="{{ $agegroup->id }}"> {{ $agegroup->age_group }}</option>
                                @endforeach
                                @if($errors->has('age_group[]'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('age_group[]') }}</strong>
                                </span>
                            @endif
                            </select>
                           
                        </div>
                      
                        <div class="col-sm-6">
                            <label class="label__wrapper required">Graduation Year Restriction</label>
                            <select name="grad_restriction[]" class="form-control input__box--wrapper" id="js-example-basic" multiple>

                                @for($i = date('Y') ; $i <= 2050; $i++)
                                    <option value={{ $i }}>{{ $i }}</option>
                                @endfor
                            </select>
                            @if($errors->has('grad_restriction[]'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('grad_restriction[]') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <label class="label__wrapper required">Allowed Bat Types</label>
                            <select multiple="multiple" class="label__wrapper required" id="myMulti" name="bat_type[]" required>
                                <option value="Wood">Wood</option>
                                <option value="BBCOR">BBCOR</option>
                                <option value="-5">-5</option>
                                <option value="-8">-8</option>
                                <option value="-10">-10</option>
                            </select>
                            @if($errors->has('bat_type'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('bat_type') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <label class="label__wrapper required">Event City</label>
                            <input type="text" name="event_city" class="form-control input__box--wrapper" value="{{ old('event_city')}}">
                            @if($errors->has('event_city'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('event_city') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="col-sm-4">
                          <label class="label__wrapper required">Event Category</label>
                            <select  class="form-control  input__box--wrapper down-icons"  name="event_category" required >
                            <option selected disabled>Select Event Category</option>    
                            <option class="form-control" value="1">Events Category</option>
                                <option class="form-control" value="2">Showcase Category</option>
                            </select>
                            @if($errors->has('event_category'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('event_category') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>
                    <div class="row mb-2">

                        <div class="col-sm-6">
                            <label class="label__wrapper required">Event State</label>
                            <select  class="form-control  input__box--wrapper down-icons" value="" name="event_state" required >
                                <option  disabled="" selected value="">select state</option>
                                @foreach($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('event_state'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('event_state') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-sm-6">
                            <label class="label__wrapper required">Entry Fee</label>
                            <input type="number" name="entry_fee" class="form-control input__box--wrapper" value="{{ old('entry_fee') }}">
                            @if($errors->has('entry_fee'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('entry_fee') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                        <div class="row mb-2"  id="addMorevenue">
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Main Site  Venue</label> <!--haxxan-->
                                <input  type="text" name="event_venue[]" class="form-control input__box--wrapper" value="{{ old('event_venue[]')}}">
                                @if($errors->has('event_venue[]'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('event_venue[]') }}</strong>
                                    </span>
                                @endif
                                <br>
                            </div>
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Event Schedule</label>
                                <select  class="form-control  input__box--wrapper down-icons" name="event_time[]" required >
                                    <option  disabled="" selected value="0">Select Schedule</option>
                                    @foreach($eventTimeSchedule as $eventSchedule)
                                        <option value="{{ $eventSchedule->event_schedule_time }}">{{ date('h:i A', strtotime($eventSchedule->event_schedule_time))}} &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {{date('M-d-Y ', strtotime($eventSchedule->event_schedule_time)) }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('event_time[]'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('event_time[]') }}</strong>
                                                </span>
                                 @endif
                            </div>
                        </div>
                        <button class="btn btn-xs btn__add mt-1" onclick="addMoreVenue()" type="button">Add More</button>

                    <div class="row mb-2" >
                        <div class="col-sm-6">
                            <label class="label__wrapper required">Gate Fee</label>
                            <input type="number" name="gate_fee" class="form-control input__box--wrapper" value="{{ old('gate_fee') }}">
                            @if($errors->has('gate_fee'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('gate_fee') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6 col__mr-right">
                            <label class="label__wrapper" for="">Event Classification </label>
                            <select  class="form-control  input__box--wrapper down-icons" name="eventclassification" required>
                                <option selected="" disabled="" selected="" value="">Select Option</option>
                                <option value="Open">Open</option>
                                <option value="Major">Major</option>
                                <option value="AAA">AAA</option>
                                <option value="AA">AA</option>
                            </select>
                            @if($errors->has('eventclassification'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('eventclassification') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>
                    <div class="row ">
                        <div class="form-group col-md-6 col__mr-right">
                            <div class="wrapper--append">
                                <div class="custom-file">
                                    <input type="file" name="event_logo" class="form-control input__box--wrapper custom-file-input" id="validatedCustomFile" >
                                    <span class="custom-file-label" for="validatedCustomFile">Choose event logo...</span>
                                    @if($errors->has('event_logo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('event_logo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <label class="label__wrapper required">Event Format</label>
                            <textarea name="event_format" class="form-control input__box--wrapper" id="event_format" placeholder="Event Format Rules."></textarea>
                            @if($errors->has('event_format'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('event_format') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label class="label__wrapper required">Tournament Details</label>
                            <textarea name="event_summary" class="form-control input__box--wrapper" id="event_summary" placeholder="Event Summary..."></textarea>
                            @if($errors->has('event_summary'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('event_summary') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="row mb-5">
                    <div class="col-sm-3 mx-auto">
                        <button class="btn btn__wrapper--four btn-file" type="submit" onclick="">Submit Event</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/multiselect.js')}}" async defer></script>

    <script>
         $('#js-example-basic-multiple').select2({
             placeholder : "Select Age Group"
         });
         $('#js-example-basic').select2({
             placeholder : "Select Graduation Years"
         });
    </script>


@endsection
