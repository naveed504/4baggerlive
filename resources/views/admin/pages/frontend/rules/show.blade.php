@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="bg-light p-3 mt-2">
           Manage Policy Rules
        </h4>
    </div>
    <div class="col-sm-12 text-right my-3">
        <a href="{{ route('siterule.create') }}">
            <button class="btn btn-success" type="button">
                Add New Rule 
            </button>
        </a>
    </div>
    <div class="col-sm-12 table-responsive">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Content</th>
                <th>Action</th>
            </thead>
            <tbody>
                @forelse($siterules as $siterule)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ Str::limit($siterule->rule, 122) }}</td>
                    <td class="padding-1">
                        <a href="{{ route('siterule.edit', $siterule->id) }}" class="text-decoration-none pr-1">
                           <i class="fas fa-edit text-primary"></i>
                        </a>
                        <a class="btn btn-xs delete p-0" href="javascript:void(0)"
                        onclick="deleteRecord({{$siterule->id}}, '/')">
                        <i class="fa fa-trash text-danger font-large margin-icon" aria-hidden="true"></i>
                    </a>
                    </td>
                </tr>
                @empty 
                <tr>
                   
                    <td></td>
                    <td>No Record Found</td>
                </tr>
                @endforelse
               
            </tbody>
        </table>
    </div>
</div>
@endsection
