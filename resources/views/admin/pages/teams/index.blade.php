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
