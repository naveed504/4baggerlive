@extends('coach.master')
@section('content')
<div class="container">

   @include('shared.team._banner')
   <section class="mt--top-40 mb-5">

        <div class="col-md-10 offset-md-2">
            <h6 class="text-uppercase text-right requested-players">
                <a href="{{ route('requested.player', $team->id) }}">Player Requests <span class="request-count">{{ $team->request->count() }}</span></a>
            </h6>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-6 ">
                        <form method="post" action="{{ route('searchplayer') }}">
                            @csrf
                            <div class="input-group">
                                <input type="search" class="form-control " placeholder="Search player" name="inputsearch">
                                <input type="hidden" name="team_id" value="{{ $team->id }}">
                                <span class="input-group-text border-0 float-right span-btn" >
                                    <button type="submit" class="border-0 search-btn"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                 </div>
            </div>
            <div class="player-search" id="player_search" >
            @forelse ($players as $player)
                <div class="row mb-4 mt-5">
                    <div class="col-sm-2 col-md-2 col-lg-2">
                        <img src="{{ asset('uploads/'.$player->player_file) }}" alt="" width="100">
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5">
                        <p class="text-uppercase"><strong>{{ $player->user->name }}</strong></p>
                        <p class="text-uppercase sub_line">
                            {{ $player->graduation_year }} GRAD |
                            {{ $player->date_of_birth }} |
                            {{ $player->player_height}}/{{ $player->player_weight }}
                        </p>
                        <p class="text-uppercase sub_line">
                           Age Group : {{ $player->age_group }}
                        </p>
                        <p class="text-uppercase sub_line">
                          Classification : {{ $player->player_classification }}
                        </p>
                        <p class="text-uppercase sub_line">
                         BAT : {{ $player->player_bat }}
                        </p>
                        <p class="text-uppercase sub_line">
                         Throw : {{ $player->player_throw }}
                        </p>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5">
                        <a class="btn btn--wrapper text-dark" href="{{ route('view.player', $player->user->id) }}">Profile</a>
                        <a class="btn btn--wrapper text-dark"
                            data-player-id={{ $player->user->id }}
                            data-team-id={{ $team->id }}
                            href="javascript:void(0);" onclick="addPlayer(this)">Add to Team</a>
                    </div>
                </div>
            @empty
                <!-- <h6 class="text-uppercase">No Player Found</h6> -->
            @endforelse
        </div>
        </div>
   </section>
   <form action="{{ route('add.teamplayer') }}" method="post" id="requestForm">
        @csrf
        <input type="hidden" name="player_id" id="player_id">
        <input type="hidden" name="team_id" id="team_id">
   </form>

</div>
@endsection

