@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-sm-12 mt-2">
            <h4 class="bg-light p-3">
                {{ $director->name }}
            </h4>
        </div>
        <div class="col-sm-12 my-3">
            <div class="row">
                <div class="col-sm-2">
                    <img src="{{ asset('images/player.jpeg') }}" class="rounded img-fluid"  alt="">
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-6">
                           <p>Company name: <strong class="text-uppercase">{{ $director->director->company_name }}</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>Adress: <strong class="text-uppercase">
                                {{ $director->director->street }}
                                {{ $director->director->city }},
                                {{ $director->director->state->state_name }} {{ $director->director->zipcode }}
                            </strong></p>
                         </div>
                    </div>
                    <hr>
                    <p class="mt-2">
                        <strong>Account Information</strong>
                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Name: <strong>{{ $director->director->account_name }}</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>Account Number: <strong>{{ $director->director->dda_checking_account }}</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>Tax Id: <strong>{{ $director->director->tax_id }}</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <p>Routing Number: <strong>{{ $director->director->dd_routingno }}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="bg-light p-3 mt-3">
                Events By {{ $director->name }}
            </h4>
       @include('shared.eventschedule.teamsinagegroup')
        </div>
    </div>
@endsection
