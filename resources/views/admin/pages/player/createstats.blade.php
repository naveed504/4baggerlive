@extends('admin.master')
@section('content')
<div class="container mb-5">
<section class="player-reg2 bg-white">
            <div class="container">
                <ul class="nav nav-tabs bagger-pills2" id="myTab" role="tablist">
                    <li><a href="#tab1" class="active" data-toggle="tab" role="tab" aria-controls="tab1" aria-selected="true">Create Player Stats</a></li>
                    <li><a href="#tab2" data-toggle="tab"> View Player Stats</a></li>
                  
                </ul>
                <div class="tab-content"  id="myTabContent">
                    <div class="tab-pane fade show active " id="tab1">
                        <div class="container">
                            <div class="accordion " id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Create Batting Stats
                                            </button>
                                        </h2>
                                    </div>
                            
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body" >
                                            <form action="{{route('playerbatstat.store') }}" method="post" id="batting_stats">
                                                @csrf
                                                <input type="hidden" name="playerid"  value="{{ $playerid ?? ''}}" >
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Season</label>
                                                        <input type="text" name="season" class="form-control" required>
                                            
                                                     </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Matches</label>
                                                        <input type="text" name="matches" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">INN</label>
                                                        <input type="text" name="innings" class="form-control" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">1B</label>
                                                        <input type="text" name="one_b" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">2B</label>
                                                        <input type="text" name="two_b" class="form-control" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">3B</label>
                                                        <input type="text" name="three_b" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">AB</label>
                                                        <input type="text" name="ab" class="form-control"  required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">AB/HR</label>
                                                        <input type="text" name="ab_hr" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">BA</label>
                                                        <input type="text" name="ba" class="form-control" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">	BB</label>
                                                        <input type="text" name= "bb" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">BB/K</label>
                                                        <input type="text" name="bb_k" class="form-control" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">BsR</label>
                                                        <input type="text" name="bsr" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">GPA</label>
                                                        <input type="text" name="gpa" class="form-control" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">GS</label>
                                                        <input type="text" name="gs" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">H</label>
                                                        <input type="text" name="h" class="form-control" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">HBP</label>
                                                        <input type="text" name="hbp" class="form-control"  required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">HR</label>
                                                        <input type="text" name="hr" class="form-control" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">HR/H</label>
                                                        <input type="text" name="hr_h" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">K</label>
                                                        <input type="text" name="k" class="form-control" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">LOB</label>
                                                        <input type="text" name="lob" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">OBP</label>
                                                        <input type="text" name="obp" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">R</label>
                                                        <input type="text" name="r" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">RC</label>
                                                        <input type="text" name="rc" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">RP</label>
                                                        <input type="text" name="rp" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">RBI</label>
                                                        <input type="text" name="rbi" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">TA</label>
                                                        <input type="text" name="ta" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="formGroupExampleInput">TB</label>
                                                        <input type="text" name="tb" class="form-control">
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
                                            <form action=" {{ route('playerpitchstat.store')}} " method="post" id="player_pitch" >
                                                @csrf
                                                <input type="hidden" name="playerid" value="{{ $playerid ?? '' }}">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Season</label>
                                                        <input type="text" name="season" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Matches</label>
                                                        <input type="text" name="matches" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">INN</label>
                                                        <input type="text" name="innings" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Game Start</label>
                                                        <input type="text" name="game_start" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Game Complete</label>
                                                        <input type="text" name="game_complete" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">SHO</label>
                                                        <input type="text" name="sho" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">H</label>
                                                        <input type="text" name="h" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">R</label>
                                                        <input type="text" name="r" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">ER</label>
                                                        <input type="text" name="er" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">HR</label>
                                                        <input type="text" name="hr" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">BB</label>
                                                        <input type="text" name="bb" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">K</label>
                                                        <input type="text" name="k" class="form-control">
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
                                            <form action="{{ route('playerfieldstat.store') }}" method="post" id="player_field">
                                                @csrf
                                                <input type="hidden" name="playerid" value="{{$playerid}}" >
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Season</label>
                                                        <input type="text" name="season" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">Matches</label>
                                                        <input type="text" name="matches" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">INN</label>
                                                        <input type="text" name="innings" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">A</label>
                                                        <input type="text" name="a" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">	CI</label>
                                                        <input type="text" name="ci" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">DB</label>
                                                        <input type="text" name="db" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">FP</label>
                                                        <input type="text" name="fp" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">PB</label>
                                                        <input type="text" name="pb" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">PO</label>
                                                        <input type="text" name="po" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">E</label>
                                                        <input type="text"  name="e" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">TC</label>
                                                        <input type="text" name="tc" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">TP</label>
                                                        <input type="text" name="tp" class="form-control">
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
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="tab2">
                        <div class="container">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                              View  Batting Stats
                                            </button>
                                        </h2>
                                    </div>
                            
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Season</th>
                                                        <th scope="col">Matches</th>
                                                        <th scope="col">INN</th>
                                                        <th scope="col">1B</th>
                                                        <th scope="col">2B</th>
                                                        <th scope="col">3B</th>
                                                        <th scope="col">AB</th>
                                                        <th scope="col">AB/HR</th>
                                                        <th scope="col">BA</th>                                                       
                                                        <th scope="col">BB</th>
                                                        <th scope="col">BB/K</th>
                                                        <th scope="col">BsR</th>
                                                        <th scope="col">GPA</th>
                                                        <th scope="col">GS</th>
                                                        <th scope="col">H</th>
                                                        <th scope="col">HBP</th>
                                                        <th scope="col">HR</th>
                                                        <th scope="col">K</th>
                                                        <th scope="col">LOB</th>
                                                        <th scope="col">OBP</th>
                                                        <th scope="col">R</th>
                                                        <th scope="col">RC</th>
                                                        <th scope="col">RP</th>
                                                        <th scope="col">RBI</th>
                                                        <th scope="col">TA</th>
                                                        <th scope="col">TB</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                @forelse($batstats as $btstat)
                                                    <tr>                                                       
                                                        <td>{{$btstat->season }}</td>
                                                        <td>{{$btstat->matches }}</td>
                                                        <td>{{$btstat->innings }}</td>
                                                        <td>{{$btstat->one_b }}</td>
                                                        <td>{{$btstat->two_b }}</td>
                                                        <td>{{$btstat->three_b }}</td>
                                                        <td>{{$btstat->ab }}</td>
                                                        <td>{{$btstat->ab_hr }}</td>
                                                        <td>{{$btstat->ba }}</td>
                                                        <td>{{$btstat->bb }}</td>
                                                        <td>{{$btstat->bb_k }}</td>
                                                        <td>{{$btstat->bsr }}</td>
                                                        <td>{{$btstat->gpa }}</td>
                                                        <td>{{$btstat->gs }}</td>
                                                        <td>{{$btstat->h }}</td>
                                                        <td>{{$btstat->hbp }}</td>
                                                        <td>{{$btstat->hr }}</td>
                                                        <td>{{$btstat->k }}</td>
                                                        <td>{{$btstat->lob }}</td>
                                                        <td>{{$btstat->obp }}</td>
                                                        <td>{{$btstat->r }}</td>
                                                        <td>{{$btstat->rc }}</td>
                                                        <td>{{$btstat->rp }}</td>
                                                        <td>{{$btstat->rbi }}</td>
                                                        <td>{{$btstat->ta }}</td>
                                                        <td>{{$btstat->tb }}</td>  
                                                        <td>
                                                        <a href="{{ route('playerbatstat.edit', $btstat->id) }}" class="blockeditLink"><i class="fas fa-pencil-alt"></i></a>
                                                        <a href="javascript:void(0)" onclick="deleteRecord({{$btstat->id}}, '/admin/playerbatstat/')" class="blockeditLink" style="margin-top:40px;"><i class="fas fa-trash-alt "></i></a>
                                                        </td>                                                     
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td>No Record Found</td>
                                                    </tr>
                                                 @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    View  Pitch Stats
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Season</th>
                                                        <th scope="col">Matches</th>
                                                        <th scope="col">INN</th>
                                                        <th scope="col">GS</th>
                                                        <th scope="col">CG</th>
                                                       
                                                        <th scope="col">SHO</th>
                                                        <th scope="col">H</th>
                                                        <th scope="col">R</th>
                                                        <th scope="col">ER</th>
                                                        <th scope="col">HR</th>
                                                        <th scope="col">BB</th>
                                                        <th scope="col">K</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($pitchstats as $ptchstat)
                                                    <tr>
                                                    <td>{{ $ptchstat->season }}</td>
                                                    <td>{{ $ptchstat->matches }}</td>
                                                    <td>{{ $ptchstat->innings }}</td>
                                                    <td>{{ $ptchstat->game_start }}</td>
                                                    <td>{{ $ptchstat->game_complete }}</td>
                                                    <td>{{ $ptchstat->sho }}</td>
                                                    <td>{{ $ptchstat->h }}</td>
                                                    <td>{{ $ptchstat->r }}</td>
                                                    <td>{{ $ptchstat->er }}</td>
                                                    <td>{{ $ptchstat->hr}}</td>
                                                    <td>{{ $ptchstat->bb }}</td>
                                                    <td>{{ $ptchstat->k }}</td>  
                                                    <td>
                                                        <a href="{{ route('playerpitchstat.edit', $ptchstat->id) }}" class="blockeditLink"><i class="fas fa-pencil-alt"></i></a>
                                                        <a href="javascript:void(0)" onclick="deleteRecord({{$ptchstat->id}}, '/admin/playerpitchstat/')" class="blockeditLink" style="margin-top:40px;"><i class="fas fa-trash-alt "></i></a>
                                                        </td>                                                 
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td>No Record Found</td>
                                                    </tr>
                                                    @endforelse
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    View Fielding Stats
                                    </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Season</th>
                                                        <th scope="col">Matches</th>
                                                        <th scope="col">INN</th>
                                                        <th scope="col">A</th>
                                                        <th scope="col">CI</th>
                                                        <th scope="col">DB</th>
                                                        <th scope="col">FP</th>
                                                        <th scope="col">PB</th>
                                                        <th scope="col">PO</th>
                                                        <th scope="col">E</th>
                                                        <th scope="col">TC</th>                                                       
                                                        <th scope="col">TP</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @forelse($fieldstats as $fldstat)
                                                    <tr>
                                                        <td>{{ $fldstat->season }}</td>
                                                        <td>{{ $fldstat->matches }}</td>
                                                        <td>{{ $fldstat->innings }}</td>
                                                        <td>{{ $fldstat->a }}</td>
                                                        <td>{{ $fldstat->ci }}</td>
                                                        <td>{{ $fldstat->db }}</td>
                                                        <td>{{ $fldstat->fp }}</td>
                                                        <td>{{ $fldstat->pb }}</td>
                                                        <td>{{ $fldstat->po }}</td>
                                                        <td>{{ $fldstat->e }}</td>
                                                        <td>{{ $fldstat->tc }}</td>
                                                        <td>{{ $fldstat->tp }}</td>
                                                        <td>
                                                        <a href="{{ route('playerfieldstat.edit', $fldstat->id) }}" class="blockeditLink"><i class="fas fa-pencil-alt"></i></a>
                                                        <a href="javascript:void(0)" onclick="deleteRecord({{$fldstat->id}}, '/admin/playerfieldstat/')" class="blockeditLink" style="margin-top:40px;"><i class="fas fa-trash-alt "></i></a>
                                                        </td>
                                                    </tr>
                                                    @empty 
                                                    <tr>
                                                        <td> No record Found</td>
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="tab3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseThree">
                                        Stats
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="">
                                        <div>
                                            <strong class="text-uppercase">
                                                Season Statistics (Jan 1st - Dec 31st)
                                            </strong>
                                            <h5 class="my-2">
                                               Batting Stats
                                            </h5>
                                            <div class="col-sm-12 table-responsive">
                                              
                                            </div>
                                        </div>

                                        {{-- Pitch Stats --}}
                                        <div>
                                            <h5 class="my-5">
                                               Pitch Stats
                                            </h5>
                                            <div class="col-sm-12 table-responsive">
                                             
                                            </div>
                                        </div>

                                        <div>
                                            <h5 class="my-5">
                                               Fielding Stats
                                            </h5>
                                            <div class="col-sm-12 table-responsive">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="tab4">
                      <section>
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="video-area">
                                        
                                      <iframe class="responsive-iframe" width="100%" height="400px" src=""></iframe>
                                   

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                    </div>
                </div>
            </div>
        </section>
</div>
@endsection