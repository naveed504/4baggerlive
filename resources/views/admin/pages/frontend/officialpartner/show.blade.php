@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="bg-light p-3 mt-2">
           Manage  Official Partner Section
        </h4>
    </div>
    <div class="col-sm-12 text-right my-3">
        <a href="{{ route('officialpartner.create') }}">
            <button class="btn btn-success" type="button">
                Add New  
            </button>
        </a>
    </div>
   
      
<div class="row">
        @forelse($officialpartners as $officialpartner)
        <div class="col-md-4">
            <div class="card custom-cardss">
                <div class="overlay">
                  <a href="{{ route('officialpartner.edit', $officialpartner->id) }}" class="blockeditLink"><i class="fas fa-pencil-alt"></i></a>
                  <a href="javascript:void(0)"
                  onclick="deleteRecord({{$officialpartner->id}}, '/admin/officialpartner/')" class="blockeditLink" style="margin-top:40px;"><i class="fas fa-trash-alt "></i></a>
                </div>
                <img src="{{ asset('admin/allimages/'. $officialpartner->image ) }}" class="card-img-top" style="height:220px;" />
                <div class="card-body">
                  <h5 class="card-title border-bottom pb-4">{{ $officialpartner->title }}</h5>
                  <p class="card-text pb-4 border-bottom">{{ Str::limit(strip_tags($officialpartner->detail), 180)  }}  </p>
                    <p class="text-center pt-3">{{ date('M-d-Y ', strtotime($officialpartner->created_at)); }}</p>
                </div>
              </div>
        </div>
        @empty 
        <h4>No ressult found</h4>
        @endforelse
</div>
</div>

@endsection