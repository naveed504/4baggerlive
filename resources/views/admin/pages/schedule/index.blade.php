@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-sm-12 my-3">
            <h4 class="bg-light p-3 mt-3">
                Events By
            </h4>
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead>
                        <th style="width:2%">#</th>
                        <th class="padding-1" >Event Name</th>
                        <th class="padding-1" >AgeGroup</th>
                        <th class="padding-1" >Teams</th>
                        <th class="padding-1" >Actions</th>
                    </thead>
                    @php
                        $resultagegroup =0;
                    @endphp
                    @forelse(Helpers::teamsInAgeGroups($events) as $event)
                  
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="padding-1">{{ $event->event_name }}</td>
                               
                                <td class="padding-1">
                                @foreach($event->ageGroups as $agegroup) 
                                                                      
                                            <button type="submit" class="badge badge-secondary" style="width:50px;tex-align:center">{{ $agegroup['age_group'] }}</button></br>
                                 @endforeach

                                </td>
                                
                                <td>
                                @foreach($event->ageGroups as $agegroup)
                                @php
                                $resultagegroup= Helpers::countTeamsInAgeGroup($agegroup['id'], $event->id)
                                @endphp
                            
                              {{ $resultagegroup }} <br>
                           
                                @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('manageschedule.show', $event->id) }}" class="btn btn-info ">
                                        Create Schedule
                                    </a>
                                </td>
                            

                            </tr>
                        @empty
                            <td colspan="11" class="text-center">No Event Found</td>
                        @endforelse
                    <tbody>

                    </tbody>
                </table>
            </div>


        </div>
    </div>

@endsection




