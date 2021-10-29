@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-sm-12 my-3">
            <h4 class="bg-light p-3 mt-3">
                Event Schedule
            </h4>
            <div class="table-responsive mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width:2%">#</th>
                            <th class="padding-1" >Event Name</th>
                            <th class="padding-1" >Team Name</th>
                            <th class="padding-1" >Opponent</th>
                            <th class="padding-1" >Time</th>
                            <th class="padding-1" >Days</th>
                        </tr>
                    </thead>

                  
                  
                    <tbody>
                        @foreach($teamMatches as $key =>$value1) 
                     
                        @foreach($value1 as $k => $value2)
                        @foreach($value2 as $val)
                      
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$eventresult->event_name}}</td>
                                <td>{{$val['team_name']}}</td>
                                <td>{{ $val['opponent_name']}}</td>
                                <td>{{$val['scheduled_time']}}</td>
                                <td>{{$k}}</td>
                            </tr>
                            @endforeach
                            @endforeach
                            @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>

@endsection




