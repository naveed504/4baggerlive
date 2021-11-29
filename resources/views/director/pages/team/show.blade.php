@extends('director.master')
@section('content')
<div class="container">


    <section class="bgbanner1">

    </section>
    <section>
        <div class="d__flex-one">
            <div class="mx__50">
                <div class="logo--wrapper--inner">
                    <img src="{{ asset('images/team/teamimages/' . $team->team_profile) }}" class="img-fluid" alt="">
                </div>
                <h2>Team</h2>
            </div>
            <div class="mx__60">
                <h2>{{ $team->team_name }}</h2>
            </div>
        </div>
    </section>
    <section class="mt--top-40">

            <div class="col-md-10 offset-md-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wrapper-four-content">
                            <strong>NATIONAL RANK:</strong>
                            <a href="#" class="font__bold-wrapper">1</a>
                        </div>
                        <div class="wrapper-four-content">
                            <strong>HOMETOWN:</strong>
                            <span>Shreveport, LA</span>
                        </div>
                        <div class="wrapper-four-content mb__70--wrapper">
                            <strong>TEAM CITY:</strong>
                            <a href="#" class="font__bold-wrapper">{{ $team->team_city }}</a>
                        </div>
                        <div class="wrapper-four-content">
                            <strong>TEAM STATE:</strong>
                            <a href="#" class="font__bold-wrapper">{{ $team->state->state_name }}</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wrapper-four-content">
                            <strong>REGIONAL RANK:</strong>
                            <a href="#" class="font__bold-wrapper">1</a>
                            <span style="font-weight:normal">(South)</span>
                        </div>
                        <div class="wrapper-four-content">
                            <strong>AGE GROUP:</strong>
                            <span>{{$team->agegroup->age_group}}</span>
                        </div>
                        <div class="wrapper-four-content">
                            <div class="d__flex-two">
                                <strong>PG RECORD:</strong>
                                <div style="margin-left:5px">
                                    <p><span class="sub__wrapper"> 22-2-0 </span><span class="box-sub-contnet">Overall</span></p>
                                   

                                </div>
                            </div>
                        </div>
                    </div>

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

                        <div id="faq1" class="collapse nav__container--wrapper show" aria-labelledby="faqhead1" data-parent="#faq">
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
                                                                            (Open)</span>&nbsp;<span
                                                                            id="">(2-1-0)</span>
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
                    <div class="card">
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
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                                aria-expanded="true" aria-controls="faq3">S.S.S</a>
                        </div>

                        <div id="faq3" class="collapse  nav__container--wrapper" aria-labelledby="faqhead3" data-parent="#faq">
                            <div class="card-body crd-border">
                           <div>
<div class="table-responsive">


                            <table class="table table__box--container table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Otto</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <td>Otto</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>

                                </tbody>
                              </table>
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
@endsection
