@extends('coach.master')
@section('content')
    @include('shared.team._banner')
    <div class="container">


        <section class="mt--top-40 mb-5">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="search" class="form-control " placeholder="Search player" name="inputsearch">
                    <input type="hidden" name="team_id" value="{{ $team->id }}">
                    <span class="input-group-text border-0 float-right span-btn">
                        <button type="submit" class="border-0 search-btn"><i class="fa fa-search"></i></button>
                    </span>
                </div>
                </form>
            </div>
            <div class="col-12 text-uppercase requested-players m-0">
                <div class="text-right">
                    <a href="{{ route('requested.player', $team->id) }}">Player Requests <span
                    class="request-count">{{ $team->request->count() }}</span></a>
                </div>
             </div>
    </div>
    <div class="container player-search" id="player_search">
        @forelse ($players as $player)
            <div class="row mb-4 mt-5">
                <div class="col-sm-2 col-md-2 col-lg-2 img_coloum">
                    @if (isset($player->player_file) && !empty($player->player_file))
                        <img src="{{ asset('frontend/player/' . $player->player_file) }}" alt="" class="rounded-circle img_profile">
                    @else
                        <img src="{{ asset('images/image002.png') }}" alt="" class="rounded-circle img_profile">
                    @endif
                </div>
                <div class="col-sm-5 col-md-5 col-lg-5">
                    <p class="text-uppercase"><strong>{{ $player->user->name }}</strong></p>
                    <p class="text-uppercase sub_line">
                        {{ $player->graduation_year }} GRAD |
                        {{ $player->date_of_birth }} |
                        {{ $player->player_height }}/{{ $player->player_weight }}
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
                    <a class="btn btn--wrapper text-dark"
                        href="{{ route('view.player', $player->user->id) }}">Profile</a>
                    <a class="btn btn--wrapper text-dark" data-player-id={{ $player->user->id }}
                        data-team-id={{ $team->id }} href="javascript:void(0);" onclick="addPlayer(this)">Add to
                        Team</a>
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
