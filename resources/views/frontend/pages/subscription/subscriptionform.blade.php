@extends('frontend.master')
@section('content')
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row  equal-height-cards">
            <div class="col-md-4">
                <div class="card pricing-box">
                    <div class="card-body d-flex flex-column text-center">
                        <div class="mb-4">
                            <h3>{{ $item->plan_type . " Months"}}</h3>
                            <span class="display-4">${!! $item->plan_amount !!}</span>
                            <span>/mo</span>
                        </div>
                        <ul>
                            @foreach (json_decode($item->plan_des) as $data)
                                <li><i class="fa fa-check"></i> {{ $data }}</li>
                            @endforeach
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
                <div class="col-md-6">
                    <form action="{{ route('subscribeplan') }}" method="post" id="subscriptionForm" >
                        @csrf

                        <input type="hidden" name="userId" value="{{Auth::user()->id}}">
                        <input type="hidden" name="amount" value="{{ $item->plan_amount}}">
                        <input type="hidden" name="plantype" value="{{ $item->plan_type}}">
                        <input type="hidden" name="subscription_plans_id" value="{{ $item->id}}">
                        
        
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
                        <button type="submit" class="btn btn-success btn-wrapper-one mr-3 text-uppercase">Subscribe Plan</button>
                        </div>
        
                    </form>
                </div>
           </div>
        </div>
    </div>
@endsection