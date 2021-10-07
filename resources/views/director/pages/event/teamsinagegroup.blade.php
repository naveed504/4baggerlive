@extends('director.master')
@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center p-4 heading-color"> </h3>
            <h5 class="text-center heading-color">
                {{ __('CURRENT EVENT :') }}
               
                <b style="color:#ce8452"> {{ $ageGroupTeams[0]->events->event_name ?? 0 }} </b>

                
            </h5>
            <h5 class="text-center heading-color" style="margin-left:-55px;">
                {{ __('CURRENT AGE-Group :') }}
                
                <b style="color:#ce8452"> {{ $ageGroupTeams[0]->ageGroups ?? 0 }} </b>
                
            </h5>
        </div>
        <div class="col-sm-10 mx-auto border mt-5 p-0">
            <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                <strong>{{ __('Teams In Age-Group')}}</strong>
            </p>
            <div class="col-sm-12 mt-2 p-4 overflow-auto">
                <div class="row mb-2 ">
                    <table class="table reduce-padding">
                        <thead>
                            <th>#</th>
                            <th>Event Name</th>                           
                            <th>Team Name</th>                          
                            <th>Age Group</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody> 
                            @forelse($ageGroupTeams as $agegroupteam)     
                            <tr>
                                <td>{{  $loop->iteration }}</td>
                                <td>{{ $agegroupteam->events->event_name}}</td>
                                <td>{{ $agegroupteam->teams->team_name}}</td>    
                                <td>{{ $agegroupteam['ageGroups']}}</td>    
                                <td>@if($agegroupteam->events->approved == 1 )<span class="badge badge-pill badge-success">Approved</span>  @else <span class="badge badge-pill badge-success">Pending</span> @endif</td>        
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                       <a href="{{ route('playersinteam', [$agegroupteam->teams->id,$agegroupteam->events->id] ) }}" class="btn btn-outline-primary">View Players</a>
                                        <a href="{{ route('eventhistory', $agegroupteam->events->id) }}" class="btn btn-outline-warning">Event History</a>
                                    </div>
                                </td>        
                            </tr>
                            @empty
                            <tr>
                            <td></td>
                            <td></td>
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