@extends('admin.master')
@section('content')
<div class="container">
    <div class="row my-5 ">
        <div class="col-sm-12">
            <h5 class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">Event's Payment Refund </h5>
        </div>
    </div>
    <form action="{{ route('adminpaymentrefund') }}" method="post" id="paymentRefundForm" >
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
                      <div class="img-cover">
                         <img src="{{ asset('images/team/teamimages/' . $team->teams->team_profile) }}" alt="img">
                        </div> 
                    </div>
                    <div class="col-sm-6">
                        <h6>{{ $team->teams->team_name }}, {{ $team->teams->division }}</h6>
                        <p>{{ $team->teams->team_city }}, {{ $team->teams->state->state_name }}</p>
                        <p>{{ $team->teams->age_group }}</p>
                    </div>
                    <div class="col-sm-2">
                        <input  type="checkbox" data-teamId="{{ $team->team_id}}"  name="teamId"  value="{{ $team->team_id }}" class="w-50 h-50" id="{{ $team->team_id }}"  checked>
                    </div>
                </div>
           <hr>
        </div>
        <div class="col-sm-6">
                        <?php $refAmount = 0 ?>
                        @foreach($team->checkRefundpayments as $refundtable)
                        <?php $refAmount += $refundtable->refund_amount ?>
                        @endforeach
                        
                        <?php $adminServiceFee=  $team->payments->admin_service_fee?>
                        <?php $totalAmount =  $team->events->entry_fee + $adminServiceFee ;
                              $remainingAmount = $totalAmount - $refAmount  ?>

                                  <div class="row">
                                      <div class="col-sm-4" >
                                      <strong>Total Amount : <br><span id="amount" style="color:#ce8452">${{  $totalAmount    }} </span></strong> 
                                      </div>
                                      <div class="col-sm-4 " >
                                        <strong>Refund Amount: 
                                        <br><span id="amount" style="color:#ce8452" >${{ $refAmount }} </span></strong>
                                        </div>
                                      <div class="col-sm-4" >
                                      <strong>Remaining Amount: <br><span id="amount" style="color:#ce8452">${{ $remainingAmount }} </span></strong>
                                        </div>
                                       

                                  </div>
                           
                <input type="hidden" name="event_id" value="{{ $team->event_id}}" >
                <input type="hidden" name="coach_id" value="{{ $team->user_id}}"/>
                <input type="hidden" name="payment_payout_id" value="{{ $team->id }}"/>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="">Card Number</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text input-txt-wrapper" id="basic-addon1">
                                    <img class="card-icons" src="{{asset('images/Visa-icon.png')}}" style="width:23px;" alt=""/>
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
                                <input type="number"
                                 name="refundAmount"
                                 data-totalRefundAmount="@if(empty($refAmount))  {{$totalAmount  }} @else {{ $remainingAmount  }} @endif"
                                 class="form-control input-content-wrapper"
                                 onkeyup="checkRefundAmount(this)"
                                 id="payamount"
                                 aria-describedby="basic-addon1" />
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
    const payamount = "{{ $totalAmount }}";
</script>

@endsection