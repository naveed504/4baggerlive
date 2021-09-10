@extends('coach.master')
@section('content')
@include('shared.event._heading')

<div class="container">
    <div class="row my-5 ">
        <div class="col-sm-12">
            <h5 class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">Add Teams To Event</h5>
        </div>
    </div>
    <form action="{{ route('payevents') }}" method="post" id="paymentformrequest">
        @csrf

    <div class="row my-5">
        <div class="col-sm-6">
            @if($errors->has('teamId[]'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('teamId[]') }}</strong>
                </span>
            @endif
            @php $count = 0; @endphp

            @forelse ($teams as $team)
               <div class="row">
                    @php $count += 1; @endphp
                    <div class="col-sm-4">
                        <img src="{{ asset('images/royals.png') }}" alt="" width="200">
                    </div>
                    <div class="col-sm-6">
                        <h6>{{ $team->team_name }}, {{ $team->division }}</h6>
                        <p>{{ $team->team_city }}, {{ $team->state->state_name }}</p>
                        <p>{{ $team->age_group }}</p>
                    </div>
                    <div class="col-sm-2">
                        <input   type="checkbox" data-teamId="{{ $team->id}}"  name="teamId[]"  value="{{ $team->id }}" class="w-50 h-50 selectTeam" id="{{ $team->id }}" onclick="CalculateAmount(this)">
                    </div>
                  @php $count += 1; @endphp
                </div>
                @empty
                <hr>
                  <div class="col-sm-12 mb-4">
                      <span class="alert-info p-3"> <i class="fa fa-info-circle" aria-hidden="true"></i> No Team Found! <a href="{{ route('teams.create') }}">Add More Teams</a> to View Here.</span>
                  </div>
            @endforelse
        </div>
        <div class="col-sm-6">
            <p class="my-25 text-center">
                <strong>Total Amount: $<span id="amount">0</span></strong>
            </p>
                <input type="hidden" name="amount" id="amountTotal">
                <input type="hidden" name="totalTeams" id="teamsTotal">
                <input type="hidden" name="event_id" value="{{$event->id}}" >
                <input type="hidden" name="event_amount" value="{{$event->entry_fee}}" >
                <input type="hidden" name="coach_id" value="{{ Auth::user()->id }}"/>
                <input type="hidden" name="servicefee" value="{{ $servicefee->servicefee }}">
                 <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="">Card Number</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span
                          class="input-group-text input-txt-wrapper"
                          id="basic-addon1"
                          ><img class="card-icons" src="{{asset('images/Visa-icon.png')}}" alt=""
                        /></span>
                      </div>
                      <input
                        type=" number"
                        name="card_number"
                        class="form-control input-content-wrapper"
                        placeholder=""
                        aria-label=""
                        id="card_number"
                        aria-describedby="basic-addon1"
                      />
                      @if($errors->has('card_number'))
                    <div class="text-danger">{{ $errors->first('card_number') }}</div>
                    @endif
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="">Exp Date</label>
                    <input
                      type="date"
                      name="exp_date"
                      id="exp_date"
                      class="form-control input-content-wrapper"
                    />
                    @if($errors->has('exp_date'))
                    <div class="text-danger">{{ $errors->first('exp_date') }}</div>
                    @endif
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputState">Cvc</label>
                    <input
                    type="number" name="cvc_number" id="cvc_number" class="form-control input-content-wrapper" />
                    @if($errors->has('cvc_number'))
                    <div class="text-danger">{{ $errors->first('cvc_number') }}</div>
                    @endif
                  </div>
                </div>
                  <div class="form-check">
                    <input type="checkbox"  name="checkbox" onclick="paymentForm(this)" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Payment After Register</label>
                  </div>
                <div class="clear-fix1"></div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-wrapper-one mr-3 text-uppercase">
                    pay
                  </button>
                </div>
        </div>
    </div>
    </form>

</div>
<script>
    const eventPrice = "{{ $event->entry_fee }}";
    const chargeservicefee = "{{ $servicefee->servicefee}}";
</script>

@endsection
