
@extends('director.newmaster')
@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center p-4 heading-color">{{ __('Director Payouts') }}</h3>

        </div>
        <div class="col-sm-10 mx-auto border mt-5 p-0">
            <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                <strong>{{ __('Payouts') }}</strong>
            </p>
            <div class="col-sm-12 mt-2 p-4 overflow-auto">
                <div class="row mb-2 ">
                @include('shared.payouts.payout')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
