@extends('director.newmaster')
@section('content')
<div class="container">
    <div class="row my-5 ">
        <div class="col-sm-12">
            <h5 class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">Event's Payment Refund </h5>
        </div>
    </div>
    <form action="{{ route('paymentrefund') }}" method="post" id="paymentRefundForm" >
        @csrf
    <div class="row my-5">
        <div class="col-sm-6">
            @if($errors->has('teamId[]'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('teamId[]') }}</strong>
                </span>
            @endif
               <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset('images/royals.png') }}" alt="" width="200">
                    </div>
                    <div class="col-sm-6">
                        <h6>{{ $team->team_name }}, {{ $team->division }}</h6>
                        <p>{{ $team->team_city }}, {{ $team->state->state_name }}</p>
                        <p>{{ $team->age_group }}</p>
                    </div>
                    <div class="col-sm-2">
                        <input  type="checkbox" data-teamId="{{ $team->id}}"  name="teamId"  value="{{ $team->id }}" class="w-50 h-50" id="{{ $team->id }}"  checked>
                    </div>
                </div>
           <hr>
        </div>
        <div class="col-sm-6">
                        @php
                        $adminAmount = $team->event->entry_fee * $servicefee->servicefee / 100 ;
                        $totalAmount = $adminAmount +  $team->event->entry_fee

                        @endphp

                        <?php $refAmount = 0 ?>
                        @foreach($team->refundpayments as $refundtable)
                        <?php $refAmount += $refundtable->refund_amount ?>
                        @endforeach

            <p class="my-25 text-center"><strong>Total Amount: $<span id="amount">{{ ($refAmount) ? round($totalAmount - $refAmount,2) :  round($totalAmount, 2) }}</span></strong></p>


                <input type="hidden" name="event_id" value="{{$team->event->id}}" >
                <input type="hidden" name="coach_id" value="{{ $team->user->id }}"/>
                <input type="hidden" name="payment_payout_id" value="{{  $team->payouts[0]->id ?? '' }}"/>



                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="">Card Number</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text input-txt-wrapper" id="basic-addon1">
                                    <img class="card-icons" src="{{asset('images/Visa-icon.png')}}" alt=""/>
                                    </span>
                                </div>
                                <input type="number" name="card_number" class="form-control input-content-wrapper"  placeholder=""  aria-label=""  id="card_number" aria-describedby="basic-addon1" />
                                @if($errors->has('card_number'))
                                    <div class="text-danger">{{ $errors->first('card_number') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Transaction Number</label>
                            <div class="input-group mb-3">
                                <input type="number"  name="getTransId" class="form-control input-content-wrapper" placeholder="" aria-label="" id="getTransId" aria-describedby="basic-addon1" />
                                @if($errors->has('getTransId'))
                                <div class="text-danger">{{ $errors->first('getTransId') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Pay Amount</label>
                            <div class="input-group mb-3">
                                <input type="number"  name="refundAmount" data-totalRefundAmount="{{ ($refAmount) ? round( $totalAmount - $refAmount ,2) :  round( $totalAmount ,2) }}" class="form-control input-content-wrapper" onkeyup="checkRefundAmount(this)" placeholder="" aria-label="" id="payamount" aria-describedby="basic-addon1" />
                                @if($errors->has('refundAmount'))
                                <div   class="text-danger"> {{ $errors->first('refundAmount') }}</div>
                                @endif
                            </div>
                            <div class="text-danger" id="msgerror"></div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="">Exp Date</label>
                                <input  type="date" name="exp_date" id="exp_date" class="form-control input-content-wrapper" />
                                @if($errors->has('exp_date'))
                                <div class="text-danger">{{ $errors->first('exp_date') }}</div>
                                @endif
                        </div>
                        <div class="form-group col-md-6">
                                <label for="inputState">Cvc</label>
                                <input type="number" name="cvc_number" id="cvc_number" class="form-control input-content-wrapper" />
                                @if($errors->has('cvc_number'))
                                <div class="text-danger">{{ $errors->first('cvc_number') }}</div>
                                @endif
                        </div>
                    </div>
                <div class="clear-fix1"></div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-wrapper-one mr-3 text-uppercase">Refund Amount</button>
                </div>
        </div>
    </div>
    </form>

</div>
<script>
    const payamount = "{{ $team->payment->amount }}";
</script>






@endsection