<style>
    .fade:not(.show) {
    opacity: 1;
}
</style>
<banner class="home2-banner">
        <div class="home2_banner_inner_main">
            <div class="row">
                <div class="home2_banner-left col-md-7">
                    <div class="home2_profile_main">
                        <span class="home2_prifile_img"> <img src="{{asset('frontend/player').'/'.$player->player->player_file}}" class="img-fluid"
                                alt="logo"></span>
                        <div class="home2_profile_text">
                            <h1 class="home2_profile_hed">{{ $player->name }}</h1>
                            <p class="home2_profile_p">Team : {{ $player->player->team->team_name ?? "N/A" }} PLAYER</p>
                            <p class="home2_profile_p2">{{ $player->player->graduation_year ?? "N/A" }} GRAD <br>
                            {{ $player->player->primary_position  ?? "N/A"}}/{{ $player->player->secondary_position ?? "N/A"}} <br> {{ $player->player->p_city ?? "N/A"}}, {{ $player->player->state->state_name  ?? "N/A"}} </p>
                        </div>
                    </div>
                    <div class="home2_school_box">
                        <div class="school_box">
                            <p class="schoolbox_p">{{ $player->player->school_name  ?? "N/A" }}</p>
                            <h3 class="schoolbox_h3">HIGH SCHOOL</h3>
                            <p class="schoolbox_p mb-0"> {{ $player->player->player_bat   ?? "N/A" }}
                                    /
                                    {{ $player->player->player_throw   ?? "N/A" }}
                                BATS/THROWS</p>
                        </div>
                        <div class="school_box">
                            <p class="schoolbox_p">{{ $player->player->last_team_played ?? "N/A" }}</p>
                            <h3 class="schoolbox_h3">TEAM LAST
                                PLAYED</h3>
                            <p class="schoolbox_p mb-0"> @if(empty($player->player->date_of_birth))
                                    {{ "N/A" }}
                                    @else
                                    {{ Helpers::calculateAgeYears($player->player->date_of_birth) }}
                                    @endif
                                    <br>
                                AGE</p>
                        </div>
                        <div class="school_box">
                            <p class="schoolbox_p"> {{ $player->player->player_height   ?? "N/A" }} /
                                    {{ $player->player->player_weight  ?? "N/A"  }}</p>
                            <h3 class="schoolbox_h3">HEIGHT/WEIGHT</h3>
                            <p class="schoolbox_p mb-0">{{ $player->player->best_grade ?? "N/A" }} <br>
                                Best Grade</p>
                        </div>
                    </div>
                </div>
                <div class="home2_banner-right col-md-5">
                    <div class="national_ranking">
                        <div class="national_ranking1">
                            <span>NATIONAL RANKING</span>
                            <p>{{ $player->player->national_ranking ?? "N/A" }} <br>

                                OVERALL</p>
                        </div>
                        <div class="national_ranking1">
                            <span>{{ $player->player->state->state_code ?? "N/A"}} STATE RANKING</span>
                            <p>{{ $player->player->state_ranking ?? "N/A" }} <br>

                                OVERALL</p>
                        </div>
                    </div>
                    <p class="outstanding-text">{{ $player->player->profile_content ?? "N/A" }}</p>

                </div>
            </div>
        </div>

    </banner>
    <section class="home2_content_section">
        <div class="home2_custom_container">
            <div class="home2_sidebar_tabs_main">

                <div class="tabs-btns">
                    <ul class="nav nav-pills flex-column home2_tabs_ul" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="false">PLAYER HOME <span><i
                                        class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">STATS <span><i
                                        class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab"
                                aria-controls="contact" aria-selected="false">VIDEO <span><i
                                        class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-4 -->
                <div class="tabs-content">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h2 class="events_result_hed">EVENT RESULTS</h2>
                            <div class="home2_list_boxes">
                            @forelse($player->playerrankstat as $playerrank)
                                <div class="home2_green_box">
                                
                                    <span class="home_box_hed">{{ $playerrank->score}}</span>
                                    <p>{{ $playerrank->player_participate_in_event}}</p>
                                </div>
                                @empty
                                <div class="home2_green_box">
                                
                                <span class="home_box_hed">N/A</span>
                                <p>N/A</p>
                            </div>
                                @endforelse
                               


                            </div>
                        </div>
                     
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <h2>{{ $player->name }} Ranking</h2>
                            <div class="tab-pane fade " id="tab2">
                                 <div class="container">
                                      <div class="accordion" id="accordionExample">
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
                                                                       
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @forelse($player->playerpitchstats as $ptchstat)
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
                                                      
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                @forelse($player->playerbatstats as $btstat)
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
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($player->playerfieldstats as $fldstat)
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

                        </div>
                        <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="contact-tab">
                            <h2>video</h2>
                            <section>
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-12">
                                  @if($player->player->player_video)
                                      <div class="video-area">                                        
                                      <iframe class="responsive-iframe" width="100%" height="300px" src="{{ asset('frontend/player/' . $player->player->player_video )}}"></iframe>
                                      </div>
                                      @else 
                                      <h3>No Player's Video found</h3>
                                  @endif
                                  </div>
                              </div>
                          </div>
                      </section>
                        </div>
                    </div>
                </div>
                <!-- /.container -->
            </div>

        </div>
        <section class="latest_show_cast">
            <div class="home2_custom_container">
                <h1>LATEST SHOWCASE REPORT</h1>
                <h3>{{ $player->player->national_ranking  ?? " N/A " }} NATIONAL SHOWCASE</h3>
                @forelse($player->playerrankstat as $playerrank)
                <p>{{ $playerrank->showcase_report}}.</p>
                @empty
                <p>No Record Found</p>
                @endforelse

            </div>
        </section>
        <section class="career_prograssion">
            <div class="home2_custom_container">
                <h1>CAREER PROGRESSION </h1>
                <div class="career_boxes_main">
                    <div class="career_box">
                        <div>
                            <h1>.31 SEC</h1>
                            <p>60 TIME SINCE
                            </p>
                            <p> 06/12/2017</p>
                        </div>
                    </div>
                    <div class="career_box">
                        <div>
                            <h1>+4 MPH</h1>
                            <p>IF VELO SINCE
                            </p>
                            <p> 08/15/2016</p>
                        </div>
                    </div>
                    <div class="career_box">
                        <div>
                            <h1>+7 MPH</h1>
                            <p>EXIT VELO SINCE
                            </p>
                            <p> 08/15/2016</p>
                        </div>
                    </div>
                    <div class="career_box">
                        <div>
                            <h1>+9.92 Gs</h1>
                            <p>DK MA SINCE
                            </p>
                            <p> 06/12/2017</p>
                        </div>
                    </div>
                </div>
                <div class="view-prograssion-div">
                    <a href="#" class="view-prograssion">VIEW PROGRESSION CHARTS</a>
                </div>


            </div>
        </section>
        
    </section>