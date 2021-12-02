@auth
  @include('shared.event._headingmodify')
@endauth
<section class="event_content_section">
        <div class="event_custom_container">
            <h1 class="event_inner_hed">EVENT INFORMATION</h1>
            <p class="event_inner_text">{{ $event->event_summary }}</p>
            <div class="event_inner_box">
                <div class="event_inner_box_left ">
                    <span class="event_check_span"><img src="{{ asset('eventmodifyimages/event_check_logo.png ') }}" alt="logo" class="img-fluid"></span>
                    <div class="event_game_box">
                        <h1 class="event_inner_hed"> {{ $event->total_matches }} Games Guaranteed</h1>
                        <p class="event_inner_text2 ">WEATHER PERMITTING</p>
                        <ul class="event_green_list">
                            <li>
                                <p>Event Fee:</p>
                                <span>{{ $event->entry_fee }} USD</span>
                            </li>
                            <li>
                                <p>Event Venue(s):</p>
                                @if($event->event_venue !=="null")
                                   @foreach(json_decode($event->event_venue) as $venue)    <!--haxxan-->
                                      {{ !empty($venue) ? $venue . " |" : "" }}
                                   @endforeach
                                @else
                                {{"No Record Found"}}
                                @endif
                             
                            </li>
                            <li>
                                <p>Expected Arrival/Departure</p>
                                <span>All teams are expected to be prepared to play as early on {{ date('F d Y' , strtotime($event->start_date)) }}.</span>

                            </li>
                            <li>
                                <span>in our continued efforts to enhance your customer experience.</span>
                            </li>
                            <li>
                            <span>Our goal is to streamline the check-in process so that fans can enjoy more . </span>
                            </li>
                            <li>
                            <span> All purchases can be made by Visa, Mastercard, American Express or Discover.</span>
                            </li>
                        </ul>
                       
               
                    </div>
                    <div class="event_list_images">
                        <div class="event_img_box">
                            <span class="event_img"><img src="{{ asset('eventmodifyimages/event_gradu.png ') }}" alt="gradu"></span>
                            <p>2047,2050 GRADUATE OR YOUNGER OR BORN ON OR AFTER JAN 01, 1970</p>
                        </div>
                        <div class="event_img_box">
                            <span class="event_img"><img src="{{ asset('eventmodifyimages/event_wood.png ') }}" alt="gradu"></span>
                            <p>
                            @if($event->allowed_bats != "null")
                     {{ $implodResult = implode(" or ", json_decode($event->allowed_bats)) }}
                        @else
                        {{ "N/A" }}
                    @endif
                            </p>
                            <p style="color: #69a628;">BAT
                                RESTRICTIONS</p>
                        </div>
                        <div class="event_img_box">
                            <span class="event_img"><img src="{{ asset('eventmodifyimages/event_cooler.png') }}" alt="gradu"></span>
                            <p>COOLERS NOT
                                ALLOWED</p>
                        </div>
                        <div class="event_img_box">
                            <span class="event_img"><img src="{{ asset('eventmodifyimages/event_gate.png ') }}" alt="gradu"></span>
                            <p>GATE FEE (PLUS TAX WHERE APPLICABLE)
                                TOURNAMENT PASS: TO GET IN
                                </p>
                                <p style="color: #69a628;">More</p>
                        </div>
                        <div class="event_img_box">
                            <span class="event_img"><img src="{{ asset('eventmodifyimages/event_scout.png') }}" alt="gradu"></span>
                            <p>SCOUT PACKET (PLUS TAX WHERE
                                APPLICABLE) $150 USD</p>
                                <p>TOURNAMENT PROGRAM (PLUS TAX WHERE APPLICABLE)
                                    $5 USD</p>
                        </div>
                        <div class="event_img_box">
                            <span class="event_img"><img src="{{ asset('eventmodifyimages/event_comodo.png ') }}" alt="gradu"></span>
                            <p> {{$event->event_format}}</p>
                        </div>
                    </div>

                </div>
                <div class="event_inner_box_right ">
                    <div class="event_inner_box_right_green">
                        <div class="start_end_date_outer">
                            <h2>Start Date</h2>
                            <p>{{ date('M d' , strtotime($event->start_date)) }}</p>

                        </div>
                        <div class="start_end_date_outer">
                            <h2>End Date</h2>
                            <p>{{ date('M d' , strtotime($event->end_date)) }}</p>

                        </div>
                        <p class="age_eligibilty">Age Eligibility</p>
                        <p class="event_graduate">{{ $event->graduation_restriction }} Graduate or younger or born on or after {{ date('M d, Y', strtotime($event->age_restriction)) }}</p>
                    </div>
                    <div class="event_right_btns">
                    <a 
        @if($event->approved == 0) disabled @endif
        @if(Auth::user()->type == 3)
            href="{{ route('addToEvent', $event->id) }}"
        @endif
    >join Event</a>
   
    <a 
    @if( Auth::user()->type == 3)
        href="{{ route('showTotalTeams', $event->id) }}"
    @elseif( Auth::user()->type == 2)
        href="{{ route('showteamsinevent', $event->id) }}"
    @elseif(Auth::user()->type == 1)
        href="{{ route('showAdminTeams', $event->id) }}"
    @endif>Total Teams <span>10</span></a>

  
                    </div>
                </div>
            </div>
        </div>
    </section>