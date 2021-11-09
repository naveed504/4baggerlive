@extends('director.newmaster')
@section('content')
<div class="row ">
      <div class="col-md-6">
        <div class="card custom-cards custom-card-1 text-white">
          <div class="card-body">
            <div class="float-left card-image mt-3">
              <img src="{{ asset('director_assets/image/card-0.png')}}" alt="" />
            </div>
            <span class="vertical-line"></span>

            <div class="float-right card-content mt-3">
              <span>Director</span>
            
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card custom-cards custom-card-2 text-white">
          <div class="card-body">
            <div class="float-left card-image mt-2">
              <img src="{{ asset('director_assets/image/card-1.png') }}" alt="" />
            </div>
            <span class="vertical-line"></span>
            <div class="float-right card-content mt-3">
              <span>Teams</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card custom-cards custom-card-3 text-white">
          <div class="card-body">
            <div class="float-left card-image mt-2">
              <img src="{{ asset('director_assets/image/card-2.png ')}}" alt="" />
            </div>
            <span class="vertical-line"></span>
            <div class="float-right card-content mt-3">
              <span>Events</span>
             
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card custom-cards custom-card-4 text-white">
          <div class="card-body">
            <div class="float-left card-image mt-3">
              <img src="{{ asset('director_assets/image/card-3.png')}}" alt="" />
            </div>
            <span class="vertical-line"></span>
            <div class="float-right card-content mt-3">
              <span>Players</span>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
