@foreach(Helpers::teamsInAgeGroups($eventResults) as $eventdata)           
            <section class="custom-background" style="min-height: 100px;">
                    <div class="container-fluid">
                
                    <div class="row parent-overlay">
                        
                            <div class="col-lg-5 custom-column ">
                                
                                <div class="flex-container">
                                    <div class="az">
                                        <span class="badge badge-pill badge-warning px-4 py-2">{{$eventdata->state->state_name}}</span>
                                    </div>
                                    <div class="dates ">
                                    {{ date('M-d-Y', strtotime($eventdata->created_at))  }}
                                    </div>
                                    <div class="florida">
                                    {{ $eventdata->event_name }}
                                    </div>  
                                </div>
                            </div>
                            <div class="col-lg-4 custom-column">
                                <div class="flex-container">
                            
                                    <div class="age-group"> 
                                
                                        @foreach($eventdata->ageGroups as $agegroup) 
                                        <form action="{{ route('agegroupteams') }}" method="post">
                                            @csrf 
                                            <input type="hidden" name="agegroupId" value="{{ $agegroup['id'] }}">                               
                                            <input type="hidden" name="eventId" value="{{ $eventdata->id }}"> 
                                            <button type="submit" class="badge badge-secondary" style="width:50px;tex-align:center">{{ $agegroup['age_group'] }}</button>
                                            <br>   
                                        </form>                             
                                        @endforeach 
                                    
                                    </div>                  
                                    <div class="age-group ">
                                  
                                    @foreach($eventdata->checkageGroupStatus as $agegroupstatus)
                                
                                    @if($agegroupstatus == "open")
                                    <span class="badge badge-pill badge-success " style="width:50px;tex-align:center">Open</span><br>
                                    @else
                                    <span class="badge badge-pill badge-info  " style="width:50px;tex-align:center">Close</span><br>
                                    @endif                          
                                    @endforeach 
                                    </div> 
                            
                                    <div class="AuBurnDale">
                                        @if($eventdata->approved == 1) <p style="color:green">Approved</p> @else  <p>Pending</p> @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 custom-column">
                                <div class="flex-container">
                                
                                    <div>  
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="lanwood-link">
                                        <a href="">{{ $eventdata->event_city }}</a>
                                    </div>  
                                    <div class="overlay">
                            <a href="{{ route('event.edit',$eventdata->id)}}"> <i class="fas fa-edit"></i></a> <br>
                            <a href="{{ route('event.show', $eventdata->id) }}"> <i class="fas fa-eye  "></i></a> <br>
                            <a href="javascript:void(0)" onclick="deleteRecord({{$eventdata->id}}, '/director/event/')"> <i class="fas fa-trash-alt mr-1"></i></a>
                            </div>
                                </div>
                            </div>
                        </div>
                
                    </div>

            </section>
            <br>
@endforeach