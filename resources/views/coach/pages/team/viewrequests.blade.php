@extends('coach.master')
@section('content')
<div class="container">

   @include('shared.team._banner')
   <div class="row">
       <div class="col-sm-12 my-5">


            @forelse ($team->request as $player)
                <div class="row mb-4 mt-5">
                    <div class="col-sm-2 col-md-2 col-lg-2">

                        <img src="{{ asset('uploads/'.$player->user->player->player_file) }}" alt="" width="100">
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5">
                        <p class="text-uppercase"><strong>{{ $player->user->name }}</strong></p>
                        <p class="text-uppercase sub_line">
                            {{ $player->user->player->graduation_year }} GRAD |
                            {{ $player->user->player->date_of_birth }} |
                            {{ $player->user->player->player_height}}/{{ $player->user->player->player_weight }}
                        </p>
                        <p class="text-uppercase sub_line">
                           Age Group : {{ $player->user->player->age_group }}
                        </p>
                        <p class="text-uppercase sub_line">
                          Classification : {{ $player->user->player->player_classification }}
                        </p>
                        <p class="text-uppercase sub_line">
                         BAT : {{ $player->user->player->player_bat }}
                        </p>
                        <p class="text-uppercase sub_line">
                         Throw : {{ $player->user->player->player_throw }}
                        </p>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5">
                        <a class="btn btn--wrapper text-dark" href="{{ route('view.player', $player->user->id) }}">Profile</a>
                        <a class="btn btn--wrapper text-dark"
                            data-player-id={{ $player->user->id }}
                            data-team-id={{ $team->id }}
                            href="javascript:void(0);" onclick="addPlayer(this)">Accept Request</a>
                    </div>
                </div>
            @empty
                <h6 class="text-uppercase">No Player Found</h6>
            @endforelse
       </div>
   </div>
</div>
<form action="{{ route('add.teamplayer') }}" method="post" id="requestForm">
    @csrf
    <input type="hidden" name="player_id" id="player_id">
    <input type="hidden" name="team_id" id="team_id">
</form>
@endsection
