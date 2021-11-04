@extends('director.master')
@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-sm-12 mb-5">
                <h3 class="text-center p-4 heading-color">EDIT TEAM</h3>
                <h5 class="text-center heading-color">BASEBALL TEAM</h5>
                <h5 class="text-center heading-color">FOR {{ date('Y') }} SEASON</h5>
            </div>
        </div>
        <form action="{{ route('team.update', $team->id) }}" method="post" id="dir_team_edit">
            @method('PUT')
            @csrf
            <input type="hidden" name="coach_id" value="{{ $team->user->id }}">
        <div class="row">
            <div class="col-sm-10 mx-auto border p-0">
                <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>Team Information</strong>
                </p>
                <div class="col-sm-12 mt-2 p-4">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Team Name</label>
                                <input type="text" name="team_name" class="form-control input__box--wrapper" value="{{ $team->team_name }}">
                                @if($errors->has('team_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('team_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Division</label>
                                <select name="division" class="form-control input__box--wrapper">
                                    <option value="AA" @if($team->division == 'AA') selected @endif>AA</option>
                                    <option value="AAA" @if($team->division == 'AAA') selected @endif>AAA</option>
                                    <option value="Majors" @if($team->division == 'Majors') selected @endif>Majors</option>
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
                                <input type="text" name="team_city" class="form-control input__box--wrapper" value="{{ $team->team_city }}">
                                @if($errors->has('team_city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('team_city') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Team State</label>
                                <select class="form-control input__box--wrapper down-icons" name="team_state" required="" id="team_state">
                                    @foreach($states as $state)
                                        <option value="{{ $state->id }}" @if($team->state_id == $state->id) selected @endif>{{ $state->state_name }}</option>
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
                                <label class="label__wrapper required">Select Event</label>

                                <select class="form-control input__box--wrapper down-icons" name="event" required="">
                                    @foreach($directorEventState as $event)
                                        <option value="{{ $event->id }}" @if($team->event_id == $event->id) selected @endif>
                                            {{ $event->event_name }}&nbsp&nbsp&nbsp{{ $event->state->state_name }}</option>
                                    @endforeach

                                </select>
                                @if($errors->has('event'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('event') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Age Group</label>
                                <select class="form-control input__box--wrapper down-icons" name="age_group" required="" id="age_group">
                                    @foreach($ageGroups as $agegroup)
                                        <option value="{{ $agegroup->id }}" @if($team->age_group_id == $agegroup->id) selected @endif> {{ $agegroup->age_group }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('age_group'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('age_group') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="label__wrapper ">Active</label>
                                <select class="form-control input__box--wrapper down-icons" name="active" required="" id="active">
                                    <option value="1" @if($team->active == 1) selected @endif> Yes</option>
                                    <option value="0" @if($team->active == 0) selected @endif> No</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 mx-auto border p-0 mt-4">
                    <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                        <strong>Coach Information</strong>
                    <div class="col-sm-12 mt-2 p-4">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Coach Name</label>
                                <input type="text" name="name" class="form-control input__box--wrapper" value="{{ $team->user->name }}">
                            </div>
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Coach Email</label>
                                <input type="email" class="form-control input__box--wrapper" name="email" value="{{ $team->user->email }}">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Coach Cell Number</label>
                                <input type="text" name="cell_no" class="form-control input__box--wrapper phoneNumber" value="{{ $team->user->cell_number }}">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Password</label>
                                <input type="password" name="password" class="form-control input__box--wrapper">
                            </div>
                            <div class="col-sm-6">
                                <label class="label__wrapper required">Confirm Password</label>
                                <input type="password" class="form-control input__box--wrapper" name="password_confirmation">
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
                            <input type="checkbox" value="1" name="terms_agreement" class="mr-2 h-25" checked>
                            <label for="">
                                I agree to the terms and conditions of FourBaager USA.
                            </label>
                        </div>
                        <div class="row mb-2">
                            <input type="checkbox" value="1" name="site_agreement" class="mr-2 h-25" checked>
                            <label for="">
                                By checking this box, I agree to comply with the FourBagger Website Agreement
                            </label>
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
@section('scripts')
    <script>
        let teamState = @php echo "'".$team->team_state."'" @endphp;
        let ageGroup = @php echo "'".$team->age_group."'" @endphp;
    </script>
@endsection
