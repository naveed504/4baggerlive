@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="bg-light p-3 mt-2">
           Approve Directors
        </h4>
    </div>
    <div class="col-sm-12 table-responsive my-3">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Director Name</th>
                <th>Email</th>
                <th>Cell Number</th>
                <th>Registered Events</th>
                <th>Approve</th>
                <th>Action</th>
            </thead>
            <tbody>
                @forelse($directors as $director)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $director->name }}</td>
                        <td>{{ $director->email }}</td>
                        <td>{{ $director->cell_number }}</td>
                        <td>{{ $director->events->count() }}</td>
                        <td>
                            <span href="javascript:void(0)" class="text-decoration-none pr-1">
                                <input type="checkbox" name="approved" id="{{ $director->id }}" onclick="approveDirector(this)">
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('director.show', $director->id) }}" class="text-decoration-none pr-1">
                               <i class="fa fa-eye text-primary" aria-hidden="true"></i>
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
