<div class="container mb-5">
    @auth
    @include('shared.event._heading')
    @endauth
    <div class="row">
    <div class="col-sm-8">
        <div class="row">
            <div class="col-sm-2">
                <img src="{{ asset('images/GameGuarantee.png') }}" class="img-fluid" width="70" alt="">
            </div>
            <div class="col-sm-6">
                <h6 class="text-uppercase m-0">
                    {{ $event->total_matches }} Games Guaranteed
                </h6>
                <p class="text-danger text-uppercase sub_line">Weather permitting</p>
            </div>
        </div>
        <p class="mt-3">All teams are expected to be prepared to play as early as 8:00AM on Thursday, June 24th.</p>
        <div class="row mt-3">
            <div class="col-sm-2">
                <img src="{{ asset('images/AgeEligibility.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-8">
                <h6 class="text-uppercase">
                    {{ $event->graduation_restriction }} Graduate or younger or born on or after {{ date('M d, Y', strtotime($event->age_restriction)) }}
                </h6>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-2">
                <img src="{{ asset('images/bat.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-4">
                <h6 class="text-uppercase m-0">
                    @if($event->allowed_bats != "null")
                     {{ $implodResult = implode(" or ", json_decode($event->allowed_bats)) }}
                        @else
                        {{ "N/A" }}
                    @endif
                </h6>
                <p class="text-uppercase text-primary sub_line">Bat restrictions</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-2">
                <img src="{{ asset('images/NoCoolers.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-4">
                <h6 class="text-uppercase m-0">
                    Coolers not allowed
                </h6>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-2">
                <img src="{{ asset('images/EntryFee.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-4">
                <h6 class="text-uppercase m-0">
                   Entry Fee
                </h6>
                <p class="text-uppercase sub_line">${{ $event->entry_fee }} USD</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12">
                <p class="text-uppercase sub_line">
                    NO REFUNDS WILL BE ISSUED AT ANYTIME AFTER PAYMENT. PERFECT GAME WILL HOLD A CREDIT TO A FUTURE EVENT IF NOTICE OF CANCELLATION IS GIVEN AT LEAST 3 WEEKS PRIOR
                </p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-2">
                <img src="{{ asset('images/GateFee.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-10">
                <h6 class="text-uppercase m-0">
                  Gate Fee <small>(plus tax where applicable)</small>
                </h6>
                <p class="text-uppercase sub_line">Tournament Pass: 55.00 USD (Per Person) - Entry to all games for this tournament</p>
                <p class="text-uppercase sub_line">Daily Pass: 10.00 USD (Per Person) - Entry to all games for a specific day</p>
                <p class="text-uppercase sub_line">Senior Citizen (65+)/Military Daily Pass: 5.00 USD (Per Person) - Entry to all games for a specific day (Requires ID)</p>
                <p class="text-uppercase sub_line">Age 14 and younger are free to get in</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12">
                <p class="text-uppercase sub_para mb-2">in our continued efforts to enhance your customer experience.</p>
                <p class="text-uppercase sub_para mb-2">Our goal is to streamline the check-in process so that fans can enjoy more time at the ball field. All purchases can be made by Visa, Mastercard, American Express or Discover.</p>
                <p class="text-uppercase sub_para">We look forward to seeing you at the field!</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-2">
                <img src="{{ asset('images/ProgramIcon.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-10">
                <h6 class="text-uppercase m-0">
                    Scout Packet <small>(plus tax where applicable)</small>
                </h6>
                <p class="text-uppercase sub_line">$150 USD</p>
                <h6 class="text-uppercase m-0">
                    Tournament Program  <small>(plus tax where applicable)</small>
                </h6>
                <p class="text-uppercase sub_line">$5 USD</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-2">
                <img src="{{ asset('images/Format.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-10">
                <p class="text-uppercase sub-line">
                    {{$event->event_format}}
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <table class="table">
            <thead>
                <tr>
                    <th class="small-size">Start Date</th>
                    <td class="small-size">{{ $event->start_date }}</td>
                </tr>
                <tr>
                    <th class="small-size">End Date</th>
                    <td class="small-size">{{ $event->end_date }}</td>
                </tr>
                <tr>
                    <th class="small-size">Expected Arrival/Departure</th>
                    <td class="small-size">All teams are expected to be prepared to play as early as 8:00AM on Thursday, June 24th.</td>
                </tr>
                <tr>
                    <th class="small-size">Age Eligibility</th>
                    <td class="small-size">{{ $event->graduation_restriction }} Graduate or younger or born on or after {{ date('M d, Y', strtotime($event->age_restriction)) }}</td>
                </tr>
                <tr>
                    <th class="small-size">Event Fee</th>
                    <td class="small-size">{{ $event->entry_fee }} USD</td>
                </tr>
                <tr>
                    <th class="small-size">Event Venue(s)</th>
                    <td class="small-size">
                    @if($event->event_venue !=="null")
                    @foreach(json_decode($event->event_venue) as $venue)    <!--haxxan-->
                                {{ !empty($venue) ? $venue . " |" : "" }}
                            @endforeach
                    @else
                    {{"No Record Found"}}
                    @endif
                    </td>
                </tr>
            </thead>
        </table>
    </div>
</div>
</div>
