
<div class="col-sm-12 mt-2 p-4">
    <div class="row mb-2">
        <div class="col-sm-6">
            <label class="label__wrapper required">Event Name</label>
            <input type="text" name="event_name" class="form-control input__box--wrapper" value="{{ $event->event_name }}">
            @if($errors->has('event_name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('event_name') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6">
            <label class="label__wrapper required">Total Matches</label>
            <input type="number" name="total_matches" class="form-control input__box--wrapper" value="{{ $event->total_matches }}">
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
            <input type="date" name="start_date" class="form-control input__box--wrapper" value="{{ $event->start_date  }}">
            @if($errors->has('start_date'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('start_date') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6">
            <label class="label__wrapper required">End Date</label>
            <input type="date" name="end_date" class="form-control input__box--wrapper" value="{{ $event->end_date }}">
            @if($errors->has('end_date'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('end_date') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-sm-6">
            <label class="label__wrapper required">Age Restriction</label>
            <input type="date" name="age_restriction" class="form-control input__box--wrapper" value="{{ $event->age_restriction }}">
            @if($errors->has('age_restriction'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('age_restriction') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6">
            <label class="label__wrapper required">Graduation Year Restriction</label>
            <select name="grad_restriction" class="form-control input__box--wrapper">
                @for($i = 1990; $i < date('Y'); $i++)
                    <option value={{ $i }} @if($event->graduation_restriction == $i) selected @endif>{{ $i }}</option>
                @endfor
            </select>
            @if($errors->has('grad_restriction'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('grad_restriction') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-sm-6">
            <label class="label__wrapper required">Allowed Bat Types</label>
            <select multiple="multiple" class="label__wrapper required" id="myMulti" name="bat_type[]">
                <option value="Wood">Wood</option>
                <option value="BBCOR">BBCOR</option>
                <option value="-5">-5</option>
                <option value="-8">-8</option>
                <option value="-10">-10</option>
            </select>
            @if($errors->has('bat_type[]'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('bat_type[]') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6">
            <label class="label__wrapper required">Entry Fee</label>
            <input type="number" name="entry_fee" class="form-control input__box--wrapper" value="{{ $event->entry_fee }}">
            @if($errors->has('entry_fee'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('entry_fee') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-sm-6">
            <label class="label__wrapper required">Event City</label>
            <input type="text" name="event_city" class="form-control input__box--wrapper" value="{{ $event->event_city }}">
            @if($errors->has('event_city'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('event_city') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6">
            <label class="label__wrapper required">Event State</label>
            <select  class="form-control  input__box--wrapper down-icons" id="team_state" name="event_state" required >
                <option  disabled="" selected value="">select state</option>
                @foreach($states as $state)
                    <option value="{{ $state->id }}" @if($event->state_id == $state->id) selected @endif>{{ $state->state_name }}</option>
                @endforeach
            </select>
            @if($errors->has('event_state'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('event_state') }}</strong>
                </span>
            @endif
        </div>
    </div>
    @php
        $venu_events=json_decode($event->event_venue);
        $filteredVenus= array_filter($venu_events);
        @endphp
       @foreach($filteredVenus as $v_event)

     <div class="row mb-2" id="addMorevenue">
        <div class="col-sm-12">
            <label class="label__wrapper required">Event Venue</label>
            <input type="text"   name="event_venue[]" class="form-control input__box--wrapper" value="{{ $v_event }}">
            @if($errors->has('event_venue'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('event_venue') }}</strong>
                </span>
            @endif
        </div>
     </div>
        @endforeach
        <div id="appendAfter"></div>
        <button class="btn btn__wrapper--four btn-file" onclick="addMoreVenue('appendAfter')" type="button">Add More</button>
        <div class="row mb-2">
                <div class="col-sm-6">
                    <label class="label__wrapper required">Gate Fee</label>
                    <input type="number" name="gate_fee" class="form-control input__box--wrapper" value="{{ $event->gate_fee }}">
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
                        <option value="Open" @if($event->eventclassification == 'Open') selected @endif >Open</option>
                        <option value="Major"  @if($event->eventclassification == 'Major') selected @endif>Major</option>
                        <option value="AAA" @if($event->eventclassification == 'AAA') selected @endif>AAA</option>
                        <option value="AA"  @if($event->eventclassification == 'AA') selected @endif>AA</option>
                    </select>
                    @if($errors->has('eventclassification'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('eventclassification') }}</strong>
                        </span>
                    @endif
                </div>
         </div>
    <div class="row mb-2">
        <div class="col-sm-12">
            <label class="label__wrapper required">Event Format</label>
            <textarea name="event_format" class="form-control input__box--wrapper" id="event_format" placeholder="Event Format Rules.">{{ $event->event_format }}</textarea>
            @if($errors->has('event_format'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('event_format') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-sm-12">
            <label class="label__wrapper required">Event Summary</label>
            <textarea name="event_summary" class="form-control input__box--wrapper" id="event_summary" placeholder="Event Summary...">{{ $event->event_summary }}</textarea>
            @if($errors->has('event_summary'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('event_summary') }}</strong>
                </span>
            @endif
        </div>
    </div>
    @if(Auth::user()->type == 1)
        <div class="row mb-2">
            <div class="col-sm-6">
                <label class="label__wrapper required">Event Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="1" @if($event->approved == 1) selected @endif>Active</option>
                    <option value="0" @if($event->approved == 0) selected @endif>Inactive</option>
                </select>
                @if($errors->has('status'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('status') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    @endif
    <div class="row mb-2 mt-5">
        <div class="col-sm-6">
            <span class="btn btn__wrapper--four btn-file" id="btnfile">
                Upload Event Logo <input type="file" id="uploadfile" name="event_logo" accept="image/*">
                @if($errors->has('event_logo'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('event_logo') }}</strong>
                    </span>
                @endif
            </span>
        </div>
    </div>
</div>
<div class="row mb-5">
    <div class="col-sm-3 mx-auto">
        <button class="btn btn__wrapper--four btn-file" type="submit" onclick="">Submit Event</button>
    </div>
</div>
