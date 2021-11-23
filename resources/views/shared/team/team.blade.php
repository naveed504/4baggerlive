@include('shared.team._banner')

<div class="container">
    <section class="">
        <div class="col-md-12">
            <div class="row">
                <div class="d-flex-custom">
                    @if (Auth::user()->type == 3)
                        <a class="btn btn--wrapper float-right text-decoration-none text-dark"
                            href="{{ route('add.player', $team->id) }}">Add Players</a>
                    @endif
                </div>
                <div class="col-md-12">
                    <div class="wrapper-four-content table-content-flex">
                        <strong>Team Coach Name:</strong>
                        <a href="#" class="font__bold-wrapper">@if (Auth::user()->type == 3) {{ Auth::user()->name }} @else {{ $teamevents->users->name }} @endif</a>
                    </div>

                    <div class="wrapper-four-content table-content-flex">
                        <strong>Team City:</strong>
                        <span>{{ $team->team_city }}</span>
                    </div>
                    <div class="wrapper-four-content table-content-flex">
                        <strong>Team Division:</strong>
                        <a href="#" class="font__bold-wrapper">{{ $team->division }}</a>
                    </div>
                    @if (Auth::user()->type == 1)
                        <div class="wrapper-four-content table-content-flex">
                            <strong>Payment Status:</strong>
                            <a href="#" class="font__bold-wrapper">@if ($teamevents->payment_status == 1) <span class="badge badge-pill badge-success">{{ 'Paid' }}</span> @else <span class="badge badge-pill badge-warning">{{ 'Pending' }}</span> @endif</a>
                        </div>
                    @endif
                    <div class="wrapper-four-content table-content-flex">
                        <strong>Team Status:</strong>
                        <a href="#" class="font__bold-wrapper">@if ($team->active == 1) <span class="badge badge-pill badge-success">Active</span> @else  <span class="badge badge-pill badge-warning">In Active</span> @endif</a>
                    </div>
                </div>
                @if (Auth::user()->type == 1)
                    <div class="col-md-6">
                        <div class="wrapper-four-content">
                            <strong>Event Name:</strong>
                            <a href="#" class="font__bold-wrapper">{{ $teamevents->events->event_name }}</a>
                        </div>
                        <div class="wrapper-four-content">
                            <strong>Entry Fee:</strong>
                            <a href="#" class="font__bold-wrapper">{{ $teamevents->events->entry_fee }}</a>
                        </div>
                        <div class="wrapper-four-content">
                            <strong>Total Matches:</strong>
                            <span>{{ $teamevents->events->total_matches }}</span>
                        </div>
                        <div class="wrapper-four-content">
                            <strong>Event City:</strong>
                            <span>{{ $teamevents->events->event_city }}</span>
                        </div>
                        <div class="wrapper-four-content">
                            <div class="d__flex-two">
                                <strong>Event City:</strong>
                                <div style="margin-left:5px">
                                    <p><span class="sub__wrapper"> 22-2-0 </span><span
                                            class="box-sub-contnet">Overall</span></p>
                                    <p><span class="sub__wrapper"> 14-2-0 </span><span class="box-sub-contnet">vs.
                                            Major</span></p>
                                    <p><span class="sub__wrapper"> 5-0-0 </span><span class="box-sub-contnet">vs.
                                            AAA</span></p>
                                    <p><span class="sub__wrapper"> 3-0-0</span><span class="box-sub-contnet">vs.
                                            Non-classified</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>



    <section>
        <div id="main">
            <!-- <div class="container"> -->
            <div class="accordion" id="faq">
                <div class="card">
                    <div class="card-header" id="faqhead1">
                        <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
                            aria-expanded="true" aria-controls="faq1">TEAM SCHEDULE</a>
                    </div>
                    <div id="faq1" class="collapse nav__container--wrapper show" aria-labelledby="faqhead1"
                        data-parent="#faq">
                        <div class="card-body crd-border">
                            <div class="container-fluid">
                                <a id="" href="#" style="color:#2763A5;"><i class="fa fa-calendar"></i> Add All to
                                    Calendar</a>
                                <br>
                                <a href="#" target="_blank" style="color:#2763A5;"><i class="fa fa-calendar"></i>
                                    Add All to
                                    Google Calendar</a>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="visible-md visible-lg">
                                            <div style="overflow-y: auto; max-height: 500px">
                                                <a class="btn btn-sm btn-white btn-block" href="#"
                                                    style="text-align: left; font-size: 11px; border: gray 1px solid; border-radius: 0; padding-left: 3px">
                                                    <input type="hidden" name="" id="" value="">
                                                    <table style="width: 100%">
                                                        <tbody>
                                                            <tr>
                                                                <td rowspan="2" style="width: 10px">
                                                                    <div id=""
                                                                        style="background-color: silver; height: 33px; width: 5px; margin-right: 5px; float: left">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span id="" style="color:#2763A5;">2020 PG 9U
                                                                        Hurricane Harvey
                                                                        Memorial Super Regional NIT
                                                                        (Open)</span>&nbsp;<span id="">(2-1-0)</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="card">
                         <div class="card-header" id="faqhead2">
                             <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                                 aria-expanded="true" aria-controls="faq2">STATS</a>
                         </div>

                         <div id="faq2" class="collapse nav__container--wrapper" aria-labelledby="faqhead2" data-parent="#faq">
                             <div class="card-body crd-border">
                                 <nav>
                                     <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                         <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                             href="#nav-home" role="tab" aria-controls="nav-home"
                                             aria-selected="true">Home</a>
                                         <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                             href="#nav-profile" role="tab" aria-controls="nav-profile"
                                             aria-selected="false">Spring/Summer</a>
                                         <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                             href="#nav-contact" role="tab" aria-controls="nav-contact"
                                             aria-selected="false">Fall</a>
                                     </div>
                                 </nav>
                                 <div class="tab-content" id="nav-tabContent">
                                     <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                         aria-labelledby="nav-home-tab">
                                         <div class="row justify-content-center my-5">
                                             <div class="col-lg-3 col-md-4 col-sm-12">
                                                 <div>
                                                     <div class="lock-box">
                                                         <p class="lock-box--heading">TEAM BATTING AVG</p>

                                                         <span id="" class="lock-box--icon"><i
                                                                 class="fa fa-lock"></i></span>


                                                         <a id="" href="#">DiamondKast Annual Subscription Needed</a>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-lg-3 col-md-4 col-sm-12">
                                                 <div>
                                                     <div class="lock-box">
                                                         <p class="lock-box--heading">TEAM BATTING AVG</p>

                                                         <span id="" class="lock-box--icon"><i
                                                                 class="fa fa-lock"></i></span>


                                                         <a id="" href="#">DiamondKast Annual Subscription Needed</a>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="col-lg-3 col-md-4 col-sm-12">
                                                 <div>
                                                     <div class="lock-box">
                                                         <p class="lock-box--heading">TEAM BATTING AVG</p>

                                                         <span id="" class="lock-box--icon"><i
                                                                 class="fa fa-lock"></i></span>


                                                         <a id="" href="#">DiamondKast Annual Subscription Needed</a>
                                                     </div>
                                                 </div>
                                             </div>

                                         </div>

                                     </div>
                                     <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                         aria-labelledby="nav-profile-tab">      <div class="row justify-content-center my-5">
                                             <div class="col-lg-3 col-md-4 col-sm-12">
                                                 <div>
                                                     <div class="lock-box">
                                                         <p class="lock-box--heading">TEAM BATTING AVG</p>

                                                         <span id="" class="lock-box--icon"><i
                                                                 class="fa fa-lock"></i></span>


                                                         <a id="" href="#">DiamondKast Annual Subscription Needed</a>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-lg-3 col-md-4 col-sm-12">
                                                 <div>
                                                     <div class="lock-box">
                                                         <p class="lock-box--heading">TEAM BATTING AVG</p>

                                                         <span id="" class="lock-box--icon"><i
                                                                 class="fa fa-lock"></i></span>


                                                         <a id="" href="#">DiamondKast Annual Subscription Needed</a>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="col-lg-3 col-md-4 col-sm-12">
                                                 <div>
                                                     <div class="lock-box">
                                                         <p class="lock-box--heading">TEAM BATTING AVG</p>

                                                         <span id="" class="lock-box--icon"><i
                                                                 class="fa fa-lock"></i></span>


                                                         <a id="" href="#">DiamondKast Annual Subscription Needed</a>
                                                     </div>
                                                 </div>
                                             </div>

                                         </div></div>
                                     <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                         aria-labelledby="nav-contact-tab">
                                         <div class="row justify-content-center my-5">
                                             <div class="col-lg-3 col-md-4 col-sm-12">
                                                 <div>
                                                     <div class="lock-box">
                                                         <p class="lock-box--heading">TEAM BATTING AVG</p>

                                                         <span id="" class="lock-box--icon"><i
                                                                 class="fa fa-lock"></i></span>


                                                         <a id="" href="#">DiamondKast Annual Subscription Needed</a>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-lg-3 col-md-4 col-sm-12">
                                                 <div>
                                                     <div class="lock-box">
                                                         <p class="lock-box--heading">TEAM BATTING AVG</p>

                                                         <span id="" class="lock-box--icon"><i
                                                                 class="fa fa-lock"></i></span>


                                                         <a id="" href="#">DiamondKast Annual Subscription Needed</a>
                                                     </div>
                                                 </div>
                                             </div>

                                             <div class="col-lg-3 col-md-4 col-sm-12">
                                                 <div>
                                                     <div class="lock-box">
                                                         <p class="lock-box--heading">TEAM BATTING AVG</p>

                                                         <span id="" class="lock-box--icon"><i
                                                                 class="fa fa-lock"></i></span>


                                                         <a id="" href="#">DiamondKast Annual Subscription Needed</a>
                                                     </div>
                                                 </div>
                                             </div>

                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div> --}}
                <div class="card">
                    <div class="card-header" id="faqhead3">
                        <a href="#" class="btn btn-header-link collapsed text-uppercase" data-toggle="collapse"
                            data-target="#faq3" aria-expanded="true" aria-controls="faq3">Players</a>
                    </div>

                    <div id="faq3" class="collapse  nav__container--wrapper" aria-labelledby="faqhead3"
                        data-parent="#faq">
                        <div class="card-body crd-border">
                            <div>
                                <div class="row">
                                    @foreach ($team->player as $key => $player)
                                        <div class="col-sm-3 space__left">
                                            <div class="card text-center" style="height: 500px">
                                                <div class="card-body p-0">
                                                    <p
                                                        class="lblheading__three text-dark mb-2 text-uppercase text-muted">
                                                        {{ $player->user->name }}</p>
                                                    <div class="hover__effect">


                                                        <div class="box-img-container">
                                                            <img class="card-img-top "
                                                                src="{{ asset('uploads/' . $player->player_file) }}"
                                                                alt="" width="100">
                                                        </div>
                                                        <div class="wrapper-box2">
                                                            <p>
                                                                <strong
                                                                    class="text-uppercase sub_para">{{ $player->graduation_year }},
                                                                    {{ $player->primary_position }}</strong>
                                                            </p>
                                                            <p class="text-uppercase sub_line text-muted">
                                                                HEIGHT WEIGHT
                                                            </p>
                                                            <p>
                                                                <strong
                                                                    class="text-uppercase sub_para">{{ $player->player_height }}
                                                                    {{ $player->player_weight }}</strong>
                                                            </p>
                                                            <p class="text-uppercase sub_line text-muted">
                                                                high school
                                                            </p>
                                                            <p>
                                                                <strong
                                                                    class="text-uppercase sub_para">{{ $player->school_name }}</strong>
                                                            </p>
                                                            <p class="text-uppercase sub_line text-muted">
                                                                hometown
                                                            </p>
                                                            <p>
                                                                <strong
                                                                    class="text-uppercase sub_para">{{ $player->p_city }},
                                                                    {{ $player->p_state }}</strong>
                                                            </p>
                                                            <a class="btn btn--wrapper text-light" @if (Auth::user()->type == 1)
                                                                href="{{ route('player.show', $player->user->id) }}"
                                                            @elseif(Auth::user()->type == 2)
                                                                href="{{ route('show.player', $player->user->id) }}"
                                                            @else
                                                                href="{{ route('view.player', $player->user->id) }}"
                                    @endif
                                    >Profile</a>

                                    <div class="custom-btn">
                                        <a href="javascript:void(0);" class="btn btn--wrapper text-light px-4 mt-3"
                                            onclick="deleteRecord({{ $player->id }}, '/team/teams/')">Remove
                                            Player</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</div>
</div>
</div>
</div>
</div>
<!-- </div> -->
</section>
</div>
