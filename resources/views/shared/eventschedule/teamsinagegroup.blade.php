
<div class="col-sm-12 mt-2 p-4 overflow-auto">
                <div class="row mb-2 ">
                    <table class="table reduce-padding">
                        <thead>
                            <th>#</th>
                            <th>Event Name</th>                           
                            <th>Team Name</th>                          
                            <th>Age Group</th>
                            <th>Payment Status</th>
                            <th>Event Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody> 
                            @forelse($ageGroupTeams as $agegroupteam)     
                            <tr>
                                <td>{{  $loop->iteration }}</td>
                                <td>{{ $agegroupteam->events->event_name}}</td>
                                <td>{{ $agegroupteam->teams->team_name}}</td>    
                                <td>{{ $agegroupteam['ageGroups']}}</td>   
                                <td>@if($agegroupteam->payment_status == 0) <span class="badge badge-pill badge-danger">Pending</span> @else <span class="badge badge-pill badge-success">Paid</span> @endif</td> 
                                <td>@if($agegroupteam->events->approved == 1 )<span class="badge badge-pill badge-success">Approved</span>  @else <span class="badge badge-pill badge-success">Pending</span> @endif</td>        
                                <td>
                                    @if(Auth::user()->type == 1)
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{ route('adminplayersinteam')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="userId" value="{{ $director->id }}">
                                                <input type="hidden" name="teamId" value="{{ $agegroupteam->teams->id }}" >
                                                <input type="hidden" name="eventId" value="{{ $agegroupteam->events->id }}" >
                                                <input type="submit" class="btn btn-outline-primary"  value="Team Players">
                                            </form>
                                            
                                            <form action="{{ route('admineventhistory')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="userId" value="{{ $director->id }}">
                                                <input type="hidden" name="eventId" value="{{ $agegroupteam->events->id }}" >
                                                <input type="submit" class="btn btn-outline-warning"  value="Event History">
                                            </form>
                                        </div>
                                    @else
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <form action="{{ route('playersinteam')}}" method="post">
                                                @csrf                                          
                                                <input type="hidden" name="teamId" value="{{ $agegroupteam->teams->id }}" >
                                                <input type="hidden" name="eventId" value="{{ $agegroupteam->events->id }}" >
                                                <input type="submit" class="btn btn-outline-primary"  value="Team Players">
                                            </form>
                                        <a href="{{ route('eventhistory', $agegroupteam->events->id) }}" class="btn btn-outline-warning">Event History</a>
                                        </div>
                                    @endif
                                   
                                    
                                  

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