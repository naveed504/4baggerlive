
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
