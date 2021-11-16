@extends('director.master')
@push('css')
<style>
    .bagger-pills li a {
        padding: 10.5px 5px !important;
    }
    .bagger-pills li {
        margin-right: 1px !important;
    }
</style>
@endpush
@section('content')
       <section class="space__tp--wrapper">
        <div class="container">
            <div class="text-center space__tp--wrapper2">
                <h3 class="heading__wraper-three">Update Player Statistics</h3>
            </div>
            <section class="player-reg">
                <ul class="nav nav-tabs bagger-pills justify-content-center">
                    <li>
                        <a href="#tab1" class="active" data-toggle="tab">Player Ranking</a>
                    </li>
                    <li><a href="#tab2" data-toggle="tab">Player Pitch Statistics</a></li>
                    <li><a href="#tab3" data-toggle="tab">Player Bat Statistics</a></li>
                    <li><a href="#tab4" data-toggle="tab">Player Field Statistics</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseOne">
                                        Player Ranking
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show">
                                <div class="panel-body"></div>
                                <div class="form__mainwrapper">
                                    <form action="{{route('ranking.store')}}" method="post" id="ranking_form">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $player->id }}">
                                        <div class="col-sm-12 mt-2 p-4">
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="">Mlb Draft</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('mlb_draft') }}" name="mlb_draft" >
                                                    @if($errors->has('mlb_draft'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('mlb_draft') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="">Mlb Debuted</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('mlb_debuted') }}" name="mlb_debuted" >
                                                    @if($errors->has('mlb_debuted'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('mlb_debuted') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="">Commitment</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('commitment') }}" name="commitment" >
                                                    @if($errors->has('commitment'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('commitment') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="">Best Pg Grade</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('best_pg_grade') }}" name="best_pg_grade" >
                                                    @if($errors->has('best_pg_grade'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('best_pg_grade') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="">National Ranking:</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('over_all') }}" name="over_all" >
                                                    @if($errors->has('over_all'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('over_all') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="">State Ranking:</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('mif') }}" name="mif" >
                                                    @if($errors->has('mif'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('mif') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col__mr-right">
                                                    <label class="label__wrapper " for="">Team Last Played</label>
                                                    <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('team_last_played') }}" name="team_last_played" >
                                                    @if($errors->has('team_last_played'))
                                                        <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('team_last_played') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn btn__next" type="submit">submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseTwo">
                                        Player Pitch Stats
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="form__mainwrapper">
                                       <div class="form__mainwrapper">
                                        <form action="{{route('pitchstats.store')}}" method="post"  id="pitch_stats">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $player->id }}">
                                            <div class="col-sm-12 mt-2 p-4">
                                                <input type="hidden" name="type" value="4">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Games Played</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('games_played') }}" name="games_played" >
                                                        @if($errors->has('games_played'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('games_played') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Games Started</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('games_started') }}" name="games_started" >
                                                        @if($errors->has('games_started'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('games_started') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Complete Games</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('complete_games') }}" name="complete_games" >
                                                        @if($errors->has('complete_games'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('complete_games') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Shut Out</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('shut_out') }}" name="shut_out" >
                                                        @if($errors->has('shut_out'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('shut_out') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Innings Pitched</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('innings_pitched') }}" name="innings_pitched" >
                                                        @if($errors->has('innings_pitched'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('innings_pitched') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Hits</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('hits') }}" name="hits" >
                                                        @if($errors->has('hits'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('hits') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Runs</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('runs') }}" name="runs" >
                                                        @if($errors->has('runs'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('runs') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Earned Runs</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('earned_runs') }}" name="earned_runs" >
                                                        @if($errors->has('earned_runs'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('earned_runs') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Home Runs</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('home_runs') }}" name="home_runs" >
                                                        @if($errors->has('home_runs'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('home_runs') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Base On Balls</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('base_on_balls') }}" name="base_on_balls" >
                                                        @if($errors->has('base_on_balls'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('base_on_balls') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Strike Out</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('strike_out') }}" name="strike_out" >
                                                        @if($errors->has('strike_out'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('strike_out') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn__next">submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseThree">
                                        Player Bat Stats
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="form__mainwrapper">
                                        <form action="{{route('batstats.store')}}" method="post" id="bat_tats">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $player->id }}">
                                            <div class="col-sm-12 mt-2 p-4">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Singles</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('single') }}" name="single" >
                                                        @if($errors->has('single'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('single') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Doubles</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('doubles') }}" name="doubles" >
                                                        @if($errors->has('doubles'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('doubles') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Triples</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('triple') }}" name="triple" >
                                                        @if($errors->has('triple'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('triple') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">At Bat</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('at_bat') }}" name="at_bat" >
                                                        @if($errors->has('at_bat'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('at_bat') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">At Bats/Home Run</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('at_bats_per_homerun') }}" name="at_bats_per_homerun" >
                                                        @if($errors->has('at_bats_per_homerun'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('at_bats_per_homerun') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Batting Average</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('batting_avg') }}" name="batting_avg" >
                                                        @if($errors->has('batting_avg'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('batting_avg') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Base On Balls</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('base_on_balls') }}" name="base_on_balls" >
                                                        @if($errors->has('base_on_balls'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('base_on_balls') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Walk/StrikeOut Ratio</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('walk_to_strikeout_ratio') }}" name="walk_to_strikeout_ratio" >
                                                        @if($errors->has('walk_to_strikeout_ratio'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('walk_to_strikeout_ratio') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Base Runs</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('base_runs') }}" name="base_runs" >
                                                        @if($errors->has('base_runs'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('base_runs') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Gross Production Average</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('gross_production_avg') }}" name="gross_production_avg" >
                                                        @if($errors->has('gross_production_avg'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('gross_production_avg') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Grand Slam</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('grand_slam') }}" name="grand_slam" >
                                                        @if($errors->has('grand_slam'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('grand_slam') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Hit</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('hit') }}" name="hit" >
                                                        @if($errors->has('hit'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('hit') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Hit By Pitch</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('hit_by_pitch') }}" name="hit_by_pitch" >
                                                        @if($errors->has('hit_by_pitch'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('hit_by_pitch') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Home Runs</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('home_runs') }}" name="home_runs" >
                                                        @if($errors->has('home_runs'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('home_runs') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Home Runs/Hit Ratio</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('home_runs_per_hit') }}" name="home_runs_per_hit" >
                                                        @if($errors->has('home_runs_per_hit'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('home_runs_per_hit') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">StrikeOut</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('strikeout') }}" name="strikeout" >
                                                        @if($errors->has('strikeout'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('strikeout') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Left On Base</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('left_on_base') }}" name="left_on_base" >
                                                        @if($errors->has('left_on_base'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('left_on_base') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">On Base Percentage</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('on_base_percentage') }}" name="on_base_percentage" >
                                                        @if($errors->has('on_base_percentage'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('on_base_percentage') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Runs Scored</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('runs_scored') }}" name="runs_scored" >
                                                        @if($errors->has('runs_scored'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('runs_scored') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Runs Created</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('runs_created') }}" name="runs_created" >
                                                        @if($errors->has('runs_created'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('runs_created') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Runs Produced</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('runs_produced') }}" name="runs_produced" >
                                                        @if($errors->has('runs_produced'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('runs_produced') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Runs Batted In</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('runs_batted_in') }}" name="runs_batted_in" >
                                                        @if($errors->has('runs_batted_in'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('runs_batted_in') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Total Average</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('total_avg') }}" name="total_avg" >
                                                        @if($errors->has('total_avg'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('total_avg') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-6 col__mr-right">
                                                        <label class="label__wrapper " for="">Total Bases</label>
                                                        <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('total_bases') }}" name="total_bases" >
                                                        @if($errors->has('total_bases'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('total_bases') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn__next" type="submit">submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseFour">
                                        Player Field Stats
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="form__mainwrapper">
                                        <form action="{{route('fieldstats.store')}}" method="post"  id="field_stats">
                                            @csrf
                                            <div class="col-sm-12 mt-2 p-4">
                                                <input type="hidden" name="user_id" value="{{ $player->id }}">
                                                    <div class="form-row">
                                                            <div class="form-group col-md-6 col__mr-right">
                                                                <label class="label__wrapper " for="">Assists</label>
                                                                <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('assists') }}" name="assists" >
                                                                @if($errors->has('assists'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('assists') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group col-md-6 col__mr-right">
                                                                <label class="label__wrapper " for="">Catcher Interference</label>
                                                                <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('catcher_interference') }}" name="catcher_interference" >
                                                                @if($errors->has('catcher_interference'))
                                                                    <span class="invalid-feedback">
                                                                        <strong>{{ $errors->first('catcher_interference') }}</strong>
                                                                    </span>
                                                                @endif
                                                           </div>
                                                      </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6 col__mr-right">
                                                            <label class="label__wrapper " for="">Double Plays</label>
                                                            <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('double_plays') }}" name="double_plays" >
                                                            @if($errors->has('double_plays'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('double_plays') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-6 col__mr-right">
                                                            <label class="label__wrapper " for="">Errors</label>
                                                            <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('errors') }}" name="errors" >
                                                            @if($errors->has('errors'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('errors') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6 col__mr-right">
                                                            <label class="label__wrapper " for="">Fielding Percentage</label>
                                                            <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('fielding_percentage') }}" name="fielding_percentage" >
                                                            @if($errors->has('fielding_percentage'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('fielding_percentage') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-6 col__mr-right">
                                                            <label class="label__wrapper " for="">Innings</label>
                                                            <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('innings') }}" name="innings" >
                                                            @if($errors->has('innings'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('innings') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6 col__mr-right">
                                                            <label class="label__wrapper " for="">Passed Ball</label>
                                                            <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('passed_ball') }}" name="passed_ball" >
                                                            @if($errors->has('passed_ball'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('passed_ball') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-6 col__mr-right">
                                                            <label class="label__wrapper " for="">Put Out</label>
                                                            <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('put_out') }}" name="put_out" >
                                                            @if($errors->has('put_out'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('put_out') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6 col__mr-right">
                                                            <label class="label__wrapper " for="">Total Chances</label>
                                                            <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('total_chances') }}" name="total_chances" >
                                                            @if($errors->has('total_chances'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('total_chances') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="form-group col-md-6 col__mr-right">
                                                            <label class="label__wrapper " for="">Triple Play</label>
                                                            <input type="text" class="form-control input__box--wrapper"  placeholder="" value="{{ old('triple_play') }}" name="triple_play" >
                                                            @if($errors->has('triple_play'))
                                                                <span class="invalid-feedback">
                                                                    <strong>{{ $errors->first('triple_play') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                           </div>
                                            <div class="text-center">
                                                <button class="btn btn__next" type="submit">submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
<script src="{{ asset('js/site.js') }}"></script>
@endsection
