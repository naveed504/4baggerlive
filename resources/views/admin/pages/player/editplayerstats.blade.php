@extends('admin.master')
@section('content')
<div class="container">
                            <div class="accordion " id="accordionExample">
                                @if($value == 1)
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Edit  Batting Stats
                                            </button>
                                        </h2>
                                    </div>
                            
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <form action="{{route('playerbatstat.update', $result->id) }}" method="post" id="batting_stats">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="playerid" value="{{ $result->player->id ?? ''}}" >
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Season</label>
                                                        <input type="text" name="season" value="{{ $result->season ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Matches</label>
                                                        <input type="text" name="matches" value="{{ $result->matches ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">INN</label>
                                                        <input type="text" name="innings" value="{{ $result->innings ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">1B</label>
                                                        <input type="text" name="one_b" value="{{ $result->innings ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">2B</label>
                                                        <input type="text" name="two_b" value="{{ $result->innings ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">3B</label>
                                                        <input type="text" name="three_b" value="{{ $result->innings ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">AB</label>
                                                        <input type="text" name="ab"  value="{{ $result->innings ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">AB/HR</label>
                                                        <input type="text" name="ab_hr" value="{{ $result->innings ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">BA</label>
                                                        <input type="text" name="ba" value="{{ $result->innings ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">	BB</label>
                                                        <input type="text" name= "bb" value="{{ $result->innings ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">BB/K</label>
                                                        <input type="text" name="bb_k" value="{{ $result->bb_k ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">BsR</label>
                                                        <input type="text" name="bsr" value="{{ $result->bsr ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">GPA</label>
                                                        <input type="text" name="gpa" value="{{ $result->gpa ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">GS</label>
                                                        <input type="text" name="gs" value="{{ $result->gs ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">H</label>
                                                        <input type="text" name="h" value="{{ $result->h ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">HBP</label>
                                                        <input type="text" name="hbp" value="{{ $result->hbp ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">HR</label>
                                                        <input type="text" name="hr" value="{{ $result->hr ?? '' }}" class="form-control">
                                                    </div>
                                                     <div class="col">
                                                       <label for="formGroupExampleInput">TB</label>
                                                        <input type="text" name="tb" value="{{ $result->tb ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">K</label>
                                                        <input type="text" name="k" value="{{ $result->k ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">LOB</label>
                                                        <input type="text" name="lob" value="{{ $result->lob ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">OBP</label>
                                                        <input type="text" name="obp" value="{{ $result->obp ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">R</label>
                                                        <input type="text" name="r" value="{{ $result->r ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">RC</label>
                                                        <input type="text" name="rc" value="{{ $result->rc ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">RP</label>
                                                        <input type="text" name="rp"  value="{{ $result->rp ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">RBI</label>
                                                        <input type="text" name="rbi" value="{{ $result->rbi ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">TA</label>
                                                        <input type="text" name="ta" value="{{ $result->ta ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                              
                                                <div class="row">
                                                   <div class="col text-center">
                                                         <button type="submit" class="btn btn__next " style="text: center;">Submit Bat Stats </button>
                                                   </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @elseif($value == 2)
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Create  Pitch Stats
                                        </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <form action=" {{ route('playerpitchstat.update', $result->id)}} " method="post" id="player_pitch" >
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="playerid" value="{{ $result->player->id ?? '' }}">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Season</label>
                                                        <input type="text" name="season" value="{{ $result->season  ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Matches</label>
                                                        <input type="text" name="matches" value="{{ $result->matches  ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">INN</label>
                                                        <input type="text" name="innings" value="{{ $result->innings  ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Game Start</label>
                                                        <input type="text" name="game_start" value="{{ $result->game_start  ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Game Complete</label>
                                                        <input type="text" name="game_complete" value="{{ $result->game_complete  ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">SHO</label>
                                                        <input type="text" name="sho" value="{{ $result->sho  ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">H</label>
                                                        <input type="text" name="h" value="{{ $result->h  ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">R</label>
                                                        <input type="text" name="r" value="{{ $result->r  ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">ER</label>
                                                        <input type="text" name="er" value="{{ $result->er  ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">HR</label>
                                                        <input type="text" name="hr" value="{{ $result->hr  ?? '' }}"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">BB</label>
                                                        <input type="text" name="bb" value="{{ $result->bb  ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">K</label>
                                                        <input type="text" name="k" value="{{ $result->k  ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-center">
                                                            <button type="submit" class="btn btn__next " style="text: center;">Submit Pitch Stats </button>
                                                    </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @elseif($value == 3 ) 
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Create   Fielding Stats
                                        </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <form action="{{ route('playerfieldstat.update', $result->id) }}" method="post" id="player_field">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="playerid" value="{{$result->player->id ?? ''}}" >
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Season</label>
                                                        <input type="text" name="season" value="{{$result->season ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Matches</label>
                                                        <input type="text" name="matches" value="{{$result->matches ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">INN</label>
                                                        <input type="text" name="innings" value="{{$result->innings ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">A</label>
                                                        <input type="text" name="a" value="{{$result->a ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">	CI</label>
                                                        <input type="text" name="ci" value="{{$result->ci ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">DB</label>
                                                        <input type="text" name="db" value="{{$result->db ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">FP</label>
                                                        <input type="text" name="fp" value="{{$result->fp  ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">PB</label>
                                                        <input type="text" name="pb" value="{{$result->pb ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">PO</label>
                                                        <input type="text" name="po" value="{{$result->po ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">E</label>
                                                        <input type="text"  name="e"  value="{{$result->e ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">TC</label>
                                                        <input type="text" name="tc" value="{{$result->tc ?? '' }}" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">TP</label>
                                                        <input type="text" name="tp" value="{{$result->tp ?? '' }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col text-center">
                                                            <button type="submit" class="btn btn__next " style="text: center;">Submit Fielding Stats </button>
                                                    </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
</div>
<script>
$(document).ready(function(){
    $("#collapseOne").show();
    $("#collapseTwo").show();
    $("#collapseThree").show();

});
</script>

@endsection