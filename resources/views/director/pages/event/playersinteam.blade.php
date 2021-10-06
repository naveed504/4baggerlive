@extends('director.master')
@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center p-4 heading-color">{{ __('REGISTERED EVENTS') }}</h3>
            <h5 class="text-center heading-color">
                {{ __('TOTAL EVENTS :') }}
                {{
                    Auth::user()->events()->count() ?? 0

                }}
            </h5>
            <h5 class="text-center heading-color">
                {{ __('TOTAL COACHES :') }}
                {{
                    Auth::user()->children()->count() ?? 0
                }}
            </h5>
        </div>
        <div class="col-sm-10 mx-auto border mt-5 p-0">
            <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                <strong>{{ __('Players In Team')}}</strong>
            </p>
            <div class="col-sm-12 mt-2 p-4 overflow-auto">
                <div class="row mb-2 ">
                    <table class="table reduce-padding">
                        <thead>
                            <th>#</th>
                            <th>Team Name</th> 
                            <th> Name</th>                       
                            <th> Profile</th>                       
                                                    
                            <th> City</th>
                            <th> Height</th>
                            <th> Number</th>
                            <th> Throw</th>
                            <th> Bat</th>
                           
                        </thead>
                        <tbody> 
                            @forelse($playerinTeam as $teamplayer)     
                            <tr>
                                <td>{{  $loop->iteration }}</td>
                                <td>{{ $teamplayer->user->name }}</td>
                                <td>{{ $teamplayer->team->team_name }}</td>
                                <td><img src="{{ asset('frontend/player/'. $teamplayer->player_file)}}" style="height:50px;width:50px"></td>
                                <td>{{ $teamplayer->p_city }}</td>
                                <td>{{ $teamplayer->player_height }}</td>
                                <td>{{ $teamplayer->user->cell_number }}</td>
                                <td>{{ $teamplayer->player_throw }}</td>
                                <td>{{ $teamplayer->player_bat }}</td>
                               
                            </tr>
                            @empty
                            <tr>
                            <td></td>
                            <td>No Record Found</td>
                            <td></td>
                            </tr>
                            @endforelse
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection