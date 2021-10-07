
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
                <strong>{{ __('Events') }}</strong>
            </p>
            <div class="col-sm-12 mt-2 p-4 overflow-auto">
                <div class="row mb-2 ">
                    <table class="table reduce-padding">
                        <thead>
                            <th>#</th>
                            <th>Event Name</th>
                            <th>Event Logo</th>
                            <th>Age Group</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Event Fee</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($eventResults as $eventdata)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $eventdata->event_name }}</td>
                                <td>
                                    <img src="{{ asset('images/event/'.$eventdata->event_logo) }}" class="rounded img-responsive dir-logo-img" alt="event logo image"  >
                                </td>
                                @php
                                $ageGroups=json_decode($eventdata->age_group);       
                                @endphp
                                <td>
                                    @forelse($ageGroups as $agegroup)
                                   
                                    <span class="badge badge-pill badge-secondary" style="width:50px;">{{ $agegroup }}</span> <br>
                                    @empty
                                    <span>No age group<span>
                                        @endforelse
                                </td>
                                <td>{{ $eventdata->start_date }}</td>
                                <td>{{ $eventdata->end_date }}</td>
                                <td>{{ $eventdata->entry_fee }}</td>
                                <td>{{ $eventdata->approved == 1 ? 'Approved' : 'Pending' }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('event.show', $eventdata->id) }}" class="btn btn-xs delete p-0">
                                            <i class="fa fa-eye text-info font-large mr-1" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-xs delete p-0" href="{{ route('event.edit',$eventdata->id) }}">
                                            <i class="fa fa-edit text-primary font-large mr-1" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-xs delete p-0" href="javascript:void(0)"
                                        onclick="deleteRecord({{$eventdata->id}}, '/director/event/')">
                                            <i class="fa fa-trash text-danger font-large" aria-hidden="true"></i>
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
        <div class="col-sm-12 mx-auto border mt-5 p-0">
            <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                <strong>{{ __('Events') }}</strong>
            </p>
            <div class="col-sm-12 mt-2 p-4 overflow-auto">
            @foreach($eventResults as $eventdata)
            <section class="custom-background ">
           <div class="container-fluid">
          
               <div class="row parent-overlay">
                    <div class="overlay">
                       <a href="{{ route('event.edit',$eventdata->id)}}"> <i class="fas fa-edit"></i></a> <br>
                       <a href=""> <i class="fas fa-eye "></i></a> <br>
                       <a href=""> <i class="fas fa-trash-alt mr-1"></i></a>
                    </div>
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
                                @php
                                $agegroupResults = explode(",", $eventdata->age_group_id)
                                @endphp
                                @foreach($agegroupResults as $agegroup)
                                 
                                <span class="badge badge-pill badge-primary px-3 py-2"> {{Helpers::getAgeGroups($agegroup) }} </span> <br>
                                @endforeach
                            </div>
                            <div class="AuBurnDale">
                                @if($eventdata->approved == 1) <p style="color:green">Approved</p> @else  <p>Pending</p> @endif
                            </div>
                            <div>
                                <span class="badge badge-pill badge-warning px-2 py-2">CLOSED</span>
                            </div>  
                        </div>
                    </div>
                    <div class="col-lg-3 custom-column">
                        <div class="flex-container">
                            <div>
                                <i class="fas fa-infinity"></i> <br>
                                <i class="fas fa-infinity"></i> <br>
                                <i class="fas fa-infinity"></i> <br>
                                <i class="fas fa-infinity"></i> <br>
                                <i class="fas fa-infinity"></i> <br>
                                <i class="fas fa-infinity"></i> <br>
                            </div>
                            <div>  
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="lanwood-link">
                                <a href="">{{ $eventdata->event_city }}</a>
                            </div>  
                        </div>
                    </div>
                </div>
          
            </div>

       </section>
      <br>
       @endforeach

            </div>
        </div>
    </div>
</div>
@endsection