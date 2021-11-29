@extends('admin.master')
@section('content')
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
                                        <div class="card-body">
                                            <form action="{{route('playerbatstat.store') }}" method="post" id="batting_stats">
                                                @csrf
                                                <input type="hidden" name="playerid" value="{{ $playerid ?? ''}}" >
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
                                                        <label for="formGroupExampleInput">1B</label>
                                                        <input type="text" name="one_b" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">2B</label>
                                                        <input type="text" name="two_b" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">3B</label>
                                                        <input type="text" name="three_b" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">AB</label>
                                                        <input type="text" name="ab" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">AB/HR</label>
                                                        <input type="text" name="ab_hr" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">BA</label>
                                                        <input type="text" name="ba" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">	BB</label>
                                                        <input type="text" name= "bb" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">BB/K</label>
                                                        <input type="text" name="bb_k" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">BsR</label>
                                                        <input type="text" name="bsr" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">GPA</label>
                                                        <input type="text" name="gpa" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">GS</label>
                                                        <input type="text" name="gs" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">H</label>
                                                        <input type="text" name="h" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">HBP</label>
                                                        <input type="text" name="hbp" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">HR</label>
                                                        <input type="text" name="hr" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">HR/H</label>
                                                        <input type="text" name="hr_h" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput">K</label>
                                                        <input type="text" name="k" class="form-control">
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
                            </div>
</div>
<script>
$(document).ready(function(){
console.log("hello");
});
</script>

@endsection