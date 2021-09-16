<main>
    <div class="container-fluid">
        <section class="bg__wrappertwo bg-light">
            <div class="container">
                <div class=" row">
                    <div class="col-md-3">
                        <div class="player__img">
                            <img src="http://127.0.0.1:8000/images/player.jpeg" class="img-fluid" alt="">
                            <h6>
                            </h6>
                        </div>
                        @if(Auth::check() && Auth::user()->type == 2)
                            <div class="mt-3 text-center">
                                <a href="{{ route('add.player.stats', $player->id ?? Auth::user()->id) }}"><button class="btn btn__add"> <i class="fa fa-edit"></i>Add Stats</button></a>
                            </div>
                        @elseif(Auth::check() && Auth::user()->type == 4)
                            @php $player = Auth::user();  @endphp
                        @endif

                    </div>
                    <div class="col-md-4 border__right-wrapper">
                        <div>
                            <h2 class="heading__one">{{ $player->name }}</h2>
                            <a href="#" class="link1 text-uppercase">{{ $player->player->team->team_name ?? "N/A" }} PLAYER</a>
                            <div>
                                <span class="label__two"> {{ $player->player->graduation_year ?? "N/A" }} GRAD </span> <span class="label__two"> | </span>
                                <span class="label__two"> {{ $player->player->primary_position  ?? "N/A"}}/{{ $player->player->secondary_position ?? "N/A"}} </span> <span class="label__two">|</span>
                                    <span class="label__two">
                                       {{ $player->player->p_city ?? "N/A"}}, {{ $player->player->state->state_name  ?? "N/A"}}
                                    </span>
                            </div>
                            <div class="Twenty"></div>
                            <div style="background-color: Gray; height: 1px"></div>
                            <div class="Twenty"></div>
                            <div class="text-center">
                                <h2 class="img__heading1">MLB DRAFT</h2>
                                <div class="img__wrapper3">
                                    <p class="text-light">{{ $player->getLatestRank->mlb_draft ?? "N/A" }}</p>
                                </div>
                                {{-- <p class="lblheading__three">ROUND 1 - 2019</p> --}}
                            </div>
                            <div class="Twenty"></div>
                            <div style="background-color: Gray; height: 1px"></div>
                            <div class="Twenty"></div>
                            <div class="row">
                                <div class="col-md-6 border__right-wrapper">
                                    <div class="text-center ">
                                        <h2 class="img__heading1 text-uppercase">MLB Debuted</h2>
                                        <div class="img__wrapper3">
                                            <p class="text-light">{{ $player->getLatestRank->mlb_debuted ?? "N/A" }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-center">
                                        <h2 class="img__heading1">LAST TEAM PLAYED</h2>
                                        <div class="img__wrapper3">
                                            <p class="text-light">{{ $player->getLatestRank->team_last_played ?? "N/A" }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-6 border__right-wrapper">
                                <div class="text-center ">
                                    <a class="link2" href="#">NATIONAL RANKING</a>
                                    <div class="flex__wrapper-three flex__responsive justify-content-center">
                                        <div class="label__three text-center">
                                            <p>{{ $player->getLatestRank->over_all ?? "N/A" }}</p>
                                            <p>OVERALL</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center ">
                                    <a class="link2" href="#">{{ $player->player->state->state_code ?? "N/A"}} STATE RANKING</a>
                                    <div class="flex__wrapper-three flex__responsive justify-content-center">
                                        <div class="label__three">
                                            <p>{{ $player->getLatestRank->mif ?? "N/A" }}</p>
                                            <p>OVERALL</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="font__colr-wraper">OUTSTANDING DEFENSIVE SS AND CAN REALLY HIT. EVERY TIME HE HIT THIS
                                SUMMER YOU ALMOST
                                EXPECTED A 100+ EXIT VELOS AND EXTRA BASES. 6.4 60 AT FB NATIONAL. VERY GOOD IN JUPITER</p>
                        </div>
                        <div class="Twenty"></div>
                        <div style="background-color: Gray; height: 1px"></div>
                        <div class="Twenty"></div>
                        <div class="flex__wrapper-three">
                            <div class="text-center ">
                                <p class="text-decoration-none text-light" href="javascript:void(0)">{{ $player->player->school_name  ?? "N/A" }}</p>
                                <p class="heading__four">High School</p>
                                <p class="font__colr-wraper1 ">
                                    {{ $player->player->player_bat   ?? "N/A" }}
                                    /
                                    {{ $player->player->player_throw   ?? "N/A" }} <br> BATS/THROWS
                                </p>
                            </div>
                            <div class="text-center ">
                                <a class="linkwrapper" href="#">{{ $player->getLatestRank->team_last_played ?? "N/A" }}</a>
                                <p class="heading__four">TEAM LAST PLAYED</p>
                                <p class="font__colr-wraper1">
                                    @if(empty($player->player->date_of_birth))
                                    {{ "N/A" }}
                                    @else 
                                    {{ Helpers::calculateAgeYears($player->player->date_of_birth) }}
                                    @endif

                                     <br> 

                                AGE</p>
                                 </div>
                            <div class="text-center">
                                <p class="text-light">
                                    {{ $player->player->player_height   ?? "N/A" }}
                                    {{ $player->player->player_weight  ?? "N/A"  }}</p>
                                <p class="heading__four">HEIGHT/WEIGHT</p>
                                <p class="font__colr-wraper1"> {{ $player->getLatestRank->best_pg_grade ?? "N/A" }} <br> Best Grade
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="player-reg2 bg-white">
            <div class="container">
                <ul class="nav nav-tabs bagger-pills2">
                    <li>
                        <a href="#tab1" class="active" data-toggle="tab">PLAYER HOME</a>
                    </li>
                    <li><a href="#tab2" data-toggle="tab"><span>16</span> EVENTS/REPORTS</a></li>
                    <li><a href="#tab3" data-toggle="tab">STATS</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseOne">
                                        Player Home
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse show">
                                <div class="panel-body">
                                    <div class="">
                                        <div class="ContentPlaceHolder1">
                                            <h3>EVENT RESULTS</h3>
                                            <div class="flex__wrapper-three">
                                                <div class="lbl-wraper-three">
                                                    <h2> 91</h2>
                                                    <p>FB VELO</p>
                                                </div>
                                                <div class="lbl-wraper-three">
                                                    <h2> 6.40 </h2>
                                                    <p> 60 YARD DASH</p>
                                                </div>
                                                <div class="lbl-wraper-three">
                                                    <h2> 1.54</h2>
                                                    <p> 10 YARD SPLIT</p>
                                                </div>
                                                <div class="lbl-wraper-three">
                                                    <h2>92</h2>
                                                    <p>IF VELO</p>
                                                </div>
                                                <div class="lbl-wraper-three">
                                                    <h2>100</h2>
                                                    <p>EXIT VELO</p>
                                                </div>
                                            </div>
                                        </div>
                                        <section>
                                            <!-- <div class="container"> -->
                                                <div class="ContentPlaceHolder1">
                                                    <h2>LATEST SHOWCASE REPORT</h2>
                                                    <p>
                                                        2018 NATIONAL SHOWCASE </p>
                                                    <p>Bobby Witt Jr is a 2019 SS/RHP with a 6-1 185 lb. frame from Colleyville, TX who attends Colleyville
                                                        Heritage HS. Tall and lean athletic build with lots of wiry strength and plenty of room for more.
                                                        6.40 runner, has outstanding defensive tools in the infield and has proven equally adept at all the
                                                        infield positions. Very soft and quick hands, outstanding at tags, very smooth and clean through the
                                                        ball, plus arm strength with the ability to throw from all angles. Right handed hitter, very loose
                                                        hands in his swing, can get extended and put a charge into balls, fluid swing with very high exit
                                                        velocities, will occasionally get too middle/oppo oriented in games and lose his leverage and raw
                                                        bat speed. All the physical tools are there and loves to play. Very good student, verbal commitment
                                                        to Oklahoma. Son of former MLB right hander Bobby Witt. Selected to play in the 2018 Perfect Game
                                                        All-American Classic.
                                                    </p>

                                                </div>
                                                <div class="ContentPlaceHolder1">
                                                    <h3 class="pg-heading">CAREER PROGRESSION</h3>
                                                    <div class="flex__wrapper-three">
                                                        <div class="text-center">
                                                        <span class="label--wrapperfour">   -.31 SEC </span> <br>
                                                            60 TIME SINCE 06/12/2017
                                                        </div>
                                                        <div class="text-center">
                                                        <span class="label--wrapperfour"> +4 MPH </span><br>
                                                            IF VELO SINCE 08/15/2016
                                                        </div>
                                                        <div class="text-center">
                                                        <span class="label--wrapperfour"> +7 MPH</span> <br>
                                                            EXIT VELO SINCE 08/15/2016
                                                        </div>
                                                        <div class="text-center">
                                                        <span class="label--wrapperfour">  +9.92 Gs</span> <br>
                                                            DK MA SINCE 06/12/2017
                                                        </div>
                                                    </div>
                                                    <div class="text-center mt-4">
                                                        <a href="#">VIEW PROGRESSION CHARTS</a>
                                                    </div>
                                                </div>
                                            <!-- </div> -->
                                        </section>
                                        <section>
                                        <!-- <div class="container"> -->
                                            <div class="mb-wrapper">
                                                <h3 class="pg-heading">PERCENTILE RANKINGS</h3>
                                                <p> CLASS OF 2019 in the recorded year</p>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">First</th>
                                                        <th scope="col">Last</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="ContentPlaceHolder12"></div>
                                        <!-- </div> -->
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent=".tab-pane" href="#collapseTwo">
                                        16 Events/Reports
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="">
                                        <div>
                                            <h2>EXIT VELO</h2>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat quia esse
                                                cupiditate, labore eius, molestiae inventore pariatur consectetur enim
                                                consequuntur voluptas eos tenetur dolorem obcaecati amet sit quis incidunt
                                                atque.</p>
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
                                                @include('shared.playerstats.Batting')
                                            </div>
                                        </div>

                                        {{-- Pitch Stats --}}
                                        <div>
                                            <h5 class="my-5">
                                               Pitch Stats
                                            </h5>
                                            <div class="col-sm-12 table-responsive">
                                                @include('shared.playerstats.Pitching')
                                            </div>
                                        </div>

                                        <div>
                                            <h5 class="my-5">
                                               Fielding Stats
                                            </h5>
                                            <div class="col-sm-12 table-responsive">
                                                @include('shared.playerstats.Fielding')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
