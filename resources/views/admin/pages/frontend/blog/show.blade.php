@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="bg-light p-3 mt-2">
           Manage  Home Blog Section
        </h4>
    </div>
    <div class="col-sm-12 text-right my-3">
        <a href="{{ route('manageblog.create') }}">
            <button class="btn btn-success" type="button">
                Add New
            </button>
        </a>
    </div>

        @forelse($blogs as $blog)
        <div class="col-md-4">
            <div class="card custom-cardss">
                <div class="overlay">
                  <a href="{{ route('manageblog.edit', $blog->id) }}" class="blockeditLink"><i class="fas fa-pencil-alt"></i></a>
                  <a href="javascript:void(0)" onclick="deleteRecord({{$blog->id}}, '/admin/manageblog/')" class="blockeditLink" style="margin-top:40px;"><i class="fas fa-trash-alt "></i></a>
                </div>
                <img src="{{ asset('admin/allimages/'. $blog->image ) }}" class="card-img-top" style="height:220px;" />
                <div class="card-body">
                  <h5 class="card-title border-bottom pb-4">{{ $blog->title }}</h5>
                  <p class="card-text pb-4 border-bottom">{!! substr($blog->detail,0, 250)  !!}  </p>
                    <p class="text-center pt-3">{{ date('M-d-Y ', strtotime($blog->created_at)) }}</p>
                </div>
              </div>
        </div>
        @empty
        <h4 style="margin-left:30px;">No ressult found</h4>
        @endforelse

</div>

@endsection
