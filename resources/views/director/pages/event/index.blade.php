@extends('director.master')
@section('content')

<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center p-4 heading-color">{{ __('REGISTERED EVENTS') }}</h3>
            <h5 class="text-center heading-color">
                {{ __('TOTAL EVENTS :') }}
                {{
                    Auth::user()->events()->count() ?? 0

                }}
            </h5>
            <h5 class="text-center heading-color">
                {{ __('TOTAL COACHES :') }}
                {{
                    Auth::user()->children()->count() ?? 0
                }}
            </h5>
        </div>
            <div class="col-sm-12 mx-auto border mt-5 p-0">
                <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                    <strong>{{ __('Events') }}</strong>
                </p>
                <div class="col-sm-12 mt-2 p-4 overflow-auto">
                @include('shared.eventschedule.index')
                </div>
            </div>
    </div>
</div>
@endsection