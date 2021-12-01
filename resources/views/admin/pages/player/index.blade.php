@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="p-2 bg-light p-3 mt-2">
                    All Players
                </h3>
            </div>
            <div class="col-sm-12 mt-3 table-responsive">
                <table class="table" id="admin_search_table">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Team</th>
                        <th>Matches</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @forelse($players as $player)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $player->first_name }} {{ $player->last_name }}</td>
                            <td>{{ $player->email }}</td>
                            <td>{{ $player->player->team->team_name ?? 'Not Assigned' }}</td>
                            <td>{{ $player->playerBat->count() }}</td>
                            <td>
                                <a href="{{ route('createplayerstats', $player->id) }}"><i class="fas fa-plus-square text-warning"></i></a>
                                <a href="{{ route('player.show', $player->id) }}"><i class="fa fa-eye text-info" aria-hidden="true"></i></a>
                                <a href="{{ route('player.edit', $player->id) }}" class="text-decoration-none pr-1">
                                    <i class="fas fa-edit text-info"></i>
                                 </a>
                                 <a href="javascript:void(0);" class="text-decoration-none" onclick="deleteRecord({{$player->id}}, '/admin/player/')">
                                     <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                 </a>
                                 
                            </td>
                        </tr>
                        @empty
                            <td colspan="6"><strong>No Player Found</strong></td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {      
    $('#admin_search_table').DataTable({
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false ,
        "pageLength": 15,
        "language": {
        "search": "Search Player Records:"
        }
    });
} );
</script>
@endsection
