@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="bg-light p-3 mt-2">
           Manage Directors
        </h4>
    </div>
    <div class="col-sm-12 text-right my-3">
        <a href="{{ route('unapproved.directors') }}">
            <button class="btn btn-success" type="button">
                Approve Directors ({{ $directors->where('status', 0)->count() }})
            </button>
        </a>
    </div>
    <div class="col-sm-12 table-responsive">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Director Name</th>
                <th>Email</th>
                <th>Cell Number</th>
                <th>Registered Events</th>
                <th>Action</th>
            </thead>
            <tbody>
                @forelse($directors->where('status', 1) as $director)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $director->director->director_name }}</td>
                        <td>{{ $director->email }}</td>
                        <td>{{ $director->cell_number }}</td>
                        <td>{{ $director->events->count() }}</td>
                        <td>
                            <a href="{{ route('director.show', $director->id) }}" class="text-decoration-none pr-1">
                               <i class="fa fa-eye text-primary" aria-hidden="true"></i>
                            </a>
                            <a href="{{ route('director.edit', $director->id) }}" class="text-decoration-none pr-1">
                               <i class="fas fa-edit text-info"></i>
                            </a>
                            <a href="javascript:void(0);" class="text-decoration-none" onclick="deleteRecord({{$director->id}}, '/admin/director/')">
                                <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <td colspan="6" class="text-center">
                        <strong class="text-uppercase">No Director Found</strong>
                    </td>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
