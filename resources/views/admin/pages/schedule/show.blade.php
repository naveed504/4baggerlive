@extends('admin.master')
@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h3 class="p-2 bg-light p-3 mt-2">
                    Manage Event Time Schedule
                </h3>
            </div>
            <div class="col-sm-12 text-right my-3">
                <a href="{{ route('managetimeschedule.create') }}">
                    <button class="btn btn-success" type="button">
                        Add New  
                    </button>
                </a>
            </div>
            <div class="col-sm-12 mt-3 table-responsive">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Event Time</th>
                            <th>Event Date</th>
                            
                            <th width="100px">Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($timeschedules as $schedule)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            
                            <td>{{ date('h:i A', strtotime($schedule->event_schedule_time)) }}</td>
                          <td>{{ date('M-d-Y ', strtotime($schedule->event_schedule_time)) }}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
 
@endsection
