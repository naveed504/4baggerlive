@extends('admin.master')
@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h3 class="p-2 bg-light p-3 mt-2">
                    Manage Teams
                </h3>
            </div>
            <div class="col-sm-12 mt-3 table-responsive">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Team Name</th>
                        <th>Team City</th>
                        <th>Team State</th>
                        <th>Division</th>
                        <th>Status</th>
                        <th>Head Coach</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse($teams as $team)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $team->team_name }}</td>
                                <td>{{ $team->team_city }}</td>
                                <td>{{ $team->state->state_name }}</td>
                                <td>{{ $team->division }}</td>
                                <td>{{ $team->active == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>{{ $team->user->name }}</td>
                                <td>
                                    <a href="{{ route('adminteams.show', $team->id) }}" class="text-decoration-none pr-1">
                                        <i class="fa fa-eye text-primary" aria-hidden="true"></i>
                                     </a>
                                     <a href="{{ route('adminteams.edit', $team->id) }}" class="text-decoration-none pr-1">
                                        <i class="fas fa-edit text-info"></i>
                                     </a>
                                     <a href="javascript:void(0);" class="text-decoration-none" onclick="deleteRecord({{$team->id}}, '/admin/adminteams/')">
                                         <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                     </a>
                                </td>
                            </tr>
                        @empty
                            <tr aria-colspan="9" class="text-center">No Team Found</tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
@endsection




@extends('admin.master')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h3 class="p-2 bg-light p-3 mt-2">
                    Manage Teams
                </h3>
            </div>
            <div class="col-sm-12 mt-3 table-responsive">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Team Name</th>
                            <th>Team City</th>
                            <th>Team State</th>
                            <th>Status</th>
                            <th>Division</th>
                            <th>Head Coach</th>
                            <th width="100px">Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        
        
        <script type="text/javascript">
    
            $(function () {
              
              var table = $('.data-table').DataTable({
                  processing: true,
                  serverSide: true,
                  ajax: "{{ route('adminteams.index') }}",
                  columns: [
                      {data: 'id', name: 'id'},
                      {data: 'team_name', name: 'team_name'},
                      {data: 'team_city', name: 'team_city'},
                      {data: 'state', name: 'state', orderable: false, searchable: false},
                      {data: 'status', name: 'status', orderable: false, searchable: false},

                      {data: 'division', name: 'division'},
                      {data: 'headcoach', name: 'headcoach'},
                    
                      {data: 'action', name: 'action', orderable: false, searchable: false},
                     
                  ]
              });
              
            });
          </script>
@endsection
