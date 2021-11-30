@extends('admin.master')
@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h3 class="p-2 bg-light p-3 mt-2">
                    Manage Teams
                </h3>
            </div>
            <div class="col-sm-12 mt-3 table-responsive" >
                <table class="table" id="admin_teams_table">
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
        <script>
    $(document).ready(function() {      
    $('#admin_teams_table').DataTable({
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false ,
        "pageLength": 15,
        "language": {
        "search": "Search Team Records:"
        }
    });
} );
</script>
@endsection
