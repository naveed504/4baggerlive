@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="bg-light p-3 mt-2">
           Manage Home Slider
        </h4>
    </div>
    <div class="col-sm-12 text-right my-3">
        <a href="{{ route('adminslider.create') }}">
            <button class="btn btn-success" type="button">
                Add New Slider 
            </button>
        </a>
    </div>
    <div class="col-sm-12 table-responsive">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Title</th>
                <th>Image</th>
                <th>Content</th>
                <th>Action</th>
            </thead>
            <tbody>
                @forelse($sliders as $slider)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $slider->title_one }} <br> {{ $slider->title_two }}</td>
                    <td><img src="{{ asset('admin/allimages/'. $slider->cover_photo ) }}" class="img img-responsive rounded "  style="height:70px; width:70px;"></td>
                    <td>{{ Str::limit($slider->content, 100) }}</td>
                    <td class="padding-1">
                        <a href="{{ route('adminslider.edit', $slider->id) }}" class="text-decoration-none pr-1">
                           <i class="fas fa-edit text-primary"></i>
                        </a>
                        <a class="btn btn-xs delete p-0" href="javascript:void(0)"
                        onclick="deleteRecord({{$slider->id}}, '/admin/adminslider/')">
                        <i class="fa fa-trash text-danger font-large margin-icon" aria-hidden="true"></i>
                    </a>
                    </td>
                </tr>
                @empty 
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>No Record Found</td>
                </tr>
                @endforelse
               
            </tbody>
        </table>
    </div>
</div>
@endsection
