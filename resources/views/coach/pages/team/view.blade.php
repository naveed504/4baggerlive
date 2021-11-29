@extends('coach.master')
@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center p-4 heading-color">{{ __('REGISTERED TEAMS') }}</h3>
            <h5 class="text-center heading-color">
                {{ __('TOTAL TEAMS :') }}
                {{

                   Auth::user()->team->count()
                }}
            </h5>
        </div>
        <div class="col-sm-10 mx-auto border mt-5 p-0">
            <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                <strong>{{ __('Teams') }}</strong>
            </p>
            <div class="col-sm-12 mt-2 p-4 overflow-auto">
                <div class="row mb-2 ">
                    <table class="table reduce-padding">
                        <thead>
                            <th>#</th>
                            <th>Team Name</th>
                            <th>Head Coach</th>
                            <th>Team Division</th>
                            <th>Team City</th>
                            <th>Team State</th>
                            <th>Age Group</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach(Auth::user()->team as $index => $team)
                           
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $team->team_name }}</td>
                                    <td>{{ Auth::user()->name }}</td>
                                    <td>{{ $team->division }}</td>
                                    <td>{{ $team->team_city }}</td>
                                    <td>{{ $team->state->state_name }}</td>
                                    <td>{{ $team->agegroup->age_group }}</td>
                                    <td>{{ ($team->active == 1) ? 'Active' : 'Inactive'}}</td>
                                    <td>
                                    <div class="btn-group">
                                    
                                        <a class="btn btn-xs edit p-0" href="{{ route('showteamevent', $team->id) }}">
                                            <i class="fa fa-asterisk text-warning font-large mr-1 pt-1" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-xs edit p-0" href="{{ route('teams.show', $team->id) }}">
                                            <i class="fa fa-eye text-info font-large mr-1 pt-1" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-xs edit p-0" href="{{ route('teams.edit', $team->id) }}">
                                            <i class="fa fa-edit text-primary font-large pt-1" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-xs delete p-0" href="javascript:void(0)"
                                            onclick="deleteRecord({{$team->id}}, '/team/delete-team/')">
                                            <i class="fa fa-trash text-danger font-large margin-icon" aria-hidden="true"></i>
                                        </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
