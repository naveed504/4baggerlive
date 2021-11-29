@extends('coach.master')
@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center p-4 heading-color">{{ __('TEAMS IN EVENT') }}</h3>
            <h5 class="text-center heading-color">
                {{ __('EVENT :') }}
                {{

                   $eventteam->events->event_name
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
                          
                            <th>Team Name</th>
                            <th>Head Coach</th>
                            <th>Team Division</th>
                            <th>Team City</th>
                            <th>Team State</th>
                            <th>Age Group</th>
                            <th>Payment Status</th>
                            <th>Team Status</th>
                           
                        </thead>
                        <tbody>
                           
                           
                                <tr>                                  
                                    <td>{{ $team->team_name }}</td>
                                    <td>{{ Auth::user()->name }}</td>
                                    <td>{{ $team->division }}</td>
                                    <td>{{ $team->team_city }}</td>
                                    <td>{{ $team->state->state_name }}</td>
                                    <td>{{ $team->agegroup->age_group }}</td>
                                    <td>
                                        @if($eventteam->payment_status == 1)
                                        <span class="badge badge-pill badge-success">Paid</span>
                                        @else
                                        <span class="badge badge-pill badge-danger">Remaining</span>
                                        @endif                                       
                                    </td>
                                    <td>{{ ($team->active == 1) ? 'Active' : 'Inactive'}}</td>                                  
                                </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
