@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-sm-12 mt-2">
            <h4 class="bg-light p-3">
                {{ $director->name }}

            </h4>
        </div>
        <div class="col-sm-12 my-3">
            <div class="row">
                <div class="col-sm-2">
                    <img src="{{ asset('images/player.jpeg') }}" class="rounded img-fluid"  alt="">
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-6">
                           <p>Company name: <strong class="text-uppercase">{{ $director->director->company_name }}</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>Adress: <strong class="text-uppercase">
                                {{ $director->director->street }}
                                {{ $director->director->city }},
                                {{ $director->director->state->state_name }} {{ $director->director->zipcode }}
                            </strong></p>
                         </div>
                    </div>
                    <hr>
                    <p class="mt-2">
                        <strong>Account Information</strong>
                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Name: <strong>{{ $director->director->account_name }}</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>Account Number: <strong>{{ $director->director->dda_checking_account }}</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>Tax Id: <strong>{{ $director->director->tax_id }}</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>Routing Number: <strong>{{ $director->director->dd_routingno }}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="bg-light p-3 mt-3">
                Events By {{ $director->name }}
            </h4>
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead>
                        <th style="width:2%">#</th>
                        <th class="padding-1" >Event Name</th>
                        <th class="padding-1" >Teams</th>
                        <th class="padding-1" >AgeGroup</th>
                        <th class="padding-1" >A-G-S</th>
                        <th class="padding-1" >Start Date</th>
                        <th class="padding-1" >End Date</th>
                        <th class="padding-1" >Fee</th>
                        <th class="padding-1" >City</th>
                        <th class="padding-1" >State</th>
                        <!-- <th class="padding-1" style="width:13%">Venue</th> -->
                        <th class="padding-1" >Status</th>
                        <th class="padding-1" >Actions</th>
                    </thead>
                    <tbody>
                        @forelse(Helpers::teamsInAgeGroups($director->events) as $event)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="padding-1">{{ $event->event_name }}</td>
                                <td class="padding-1">{{ $event->total_matches }}</td>
                                <td class="padding-1">
                                @foreach($event->ageGroups as $agegroup)
                                        <form action="{{ route('adminagegroupteams') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="agegroupId" value="{{ $agegroup['id'] }}">
                                            <input type="hidden" name="eventId" value="{{ $event->id }}">
                                            <input type="hidden" name="userId" value="{{ $director->id }}">
                                            <button type="submit" class="badge badge-secondary" style="width:50px;tex-align:center">{{ $agegroup['age_group'] }}</button>
                                            <input type="checkbox"  id="changestatus_agegroup"   data-userId="{{ $director->id }}" data-eventId="{{ $event->id }}" data-agegroupId="{{ $agegroup['id'] }}" >


                                        </form>
                                 @endforeach

                                </td>
                                <td>
                                @foreach($event->checkageGroupStatus as $agegroupstatus)
                                @if($agegroupstatus == "open")
                                <span class="badge badge-pill badge-success " style="width:50px;tex-align:center">Open</span><br>
                                @else
                                <span class="badge badge-pill badge-info  " style="width:50px;tex-align:center">Close</span><br>
                                @endif
                                @endforeach
                                </td>
                                <td class="padding-1">{{ date('M d, Y', strtotime($event->start_date)) }}</td>
                                <td class="padding-1">{{ date('M d, Y', strtotime($event->end_date)) }}</td>
                                <td class="padding-1">{{ $event->entry_fee }}</td>
                                <td class="padding-1">{{ $event->event_city }}</td>
                                <td class="padding-1">{{ $event->state->state_name }}</td>
                                <!-- <td class="padding-1">
                                    @foreach(json_decode($event->event_venue) as $venue)
                                        {{ !empty($venue) ? $venue . " |" : "" }}
                                    @endforeach
                                 </td> -->
                                 <td class="padding-1"> @if($event->approved == 1)
                                     <span class="badge badge-pill badge-success">Approve</span> @else
                                     <span class="badge badge-pill badge-warning">Pending</span> @endif
                                    </td>
                                 {{-- <td class="padding-1">{{ $event->approved == 1 ? 'Active' : 'Inactive' }}</td> --}}
                                 <td class="padding-1">
                                    <a href="{{ route('events.show', $event->id) }}" class="text-decoration-none pr-1">
                                        <i class="fa fa-eye text-info" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ route('events.edit', $event->id) }}" class="text-decoration-none pr-1">
                                       <i class="fas fa-edit text-primary"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="deleteRecord({{$event->id}}, '/director/event/')"> <i class="fas fa-trash-alt mr-1"></i></a>
                                </td>
                            </tr>
                        @empty
                            <td colspan="11" class="text-center">No Event Found</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <h4 class="bg-light p-3 mt-3">
                Available Fields for {{ $director->name }}
            </h4>
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead>
                        <th class="text-center">#</th>
                        <th class="text-center">Field Name</th>
                        <th class="text-center">No of Fields</th>
                        <th class="text-center">Field City</th>
                        <th class="text-center">Field State</th>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < count(json_decode($director->director->name_of_field)); $i++)
                            <tr>
                                <td class="p-1 text-center">{{ $i+1 }}</td>
                                <td class="p-1 text-center">{{ json_decode($director->director->name_of_field)[$i] }}</td>
                                <td class="p-1 text-center">{{ json_decode($director->director->no_of_field)[$i] }}</td>
                                <td class="p-1 text-center">{{ json_decode($director->director->field_city)[$i] }}</td>
                                <td class="p-1 text-center">{{ json_decode($director->director->field_state)[$i] }}</td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
   $(document).on('click','#changestatus_agegroup', function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var userid = $(this).attr("data-userId");
    var eventid = $(this).attr("data-eventId");
    var agegroupid = $(this).attr("data-agegroupId");
    $.ajax({
          data: {userid:userid, eventid:eventid, agegroupid:agegroupid},
          url: "{{ route('changeagegroupstaus') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
            if(data.status = "updated") {
                setTimeout(function() {
                    location.reload();
                }, 2000);
            }

          },
          error: function (data) {
              console.log('Error:', data);
              $('#btn-save').html('Save Changes');
          }
      });


    });


</script>
@endsection





