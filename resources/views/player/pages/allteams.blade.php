@extends('player.master')
@section('content')
<div class="container">
    <section class="bgbanner1">
    </section>
    <section>
        <div class="d__flex-one">
            <div class="mx__50">
                <div class="logo--wrapper--inner">
                    <img src="{{ asset('images/logo1.png') }}" class="img-fluid" alt="">
                </div>
                <h2>All Teams</h2>
            </div>
            <div class="mx__60">
                <h2>{{ count($allteams) }}</h2>
            </div>
        </div>
    </section>
    <section class="mt--top-40 mb-5">
        <div class="col-md-10 offset-md-2">

             @foreach($allteams as $team)
                <div class="row mb-4">
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <img src="{{asset('images/img007.png')}}" alt="" width="100">
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5">
                        <p class="text-uppercase"><strong>{{ $team->team_name }}</strong></p>

                        <p class="text-uppercase sub_line">
                           Team City :{{ $team->team_city }}
                        </p>
                        <p class="text-uppercase sub_line">
                          Team State : {{ $team->state->state_name }}
                        </p>
                        <p class="text-uppercase sub_line">
                         Age Group : {{ $team->age_group }}
                        </p>
                        <p class="text-uppercase sub_line">
                         Division : {{ $team->division }}
                        </p>
                        <p class="text-uppercase sub_line">
                         Status :  @if($team->active == 1)<span class="badge badge-success">Active</span> @else <span class="badge badge-danger">Pending</span> @endif
                        </p>
                    </div>

                    <div class="col-sm-5 col-md-5 col-lg-5">
                        <a class="btn btn--wrapper text-dark" href="{{ route('viewteam',$team->id) }}">View</a>
                        @if(Auth::user()->player->team_id == null && empty(Auth::user()->request()->where('team_id', $team->id)->first()))
                            <a class="btn btn--wrapper text-dark text-decoration-none"
                                data-player-id="{{ Auth::user()->id }}"
                                data-team-id="{{ $team->id }}"
                                href="javascript:void(0);" onclick="addPlayer(this)"
                             >Request</a>
                        @endif
                    </div>

                </div>
            @endforeach

        </div>
    <form action="{{ route('playerrequest') }}" method="post" id="requestForm">
        @csrf
        <input type="hidden" name="player_id" id="player_id">
        <input type="hidden" name="team_id" id="team_id">
    </form>
   </section>
</div>
@endsection
