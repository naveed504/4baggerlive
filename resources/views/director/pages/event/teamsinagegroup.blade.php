@extends('director.newmaster')
@section('content')
<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="text-center p-4 heading-color"> </h3>
            <h5 class="text-center heading-color">
                {{ __('CURRENT EVENT :') }}
               
                <b style="color:#ce8452"> {{ $ageGroupTeams[0]->events->event_name ?? 0 }} </b>

                
            </h5>
            <h5 class="text-center heading-color" style="margin-left:-55px;">
                {{ __('CURRENT AGE-Group :') }}
                
                <b style="color:#ce8452"> {{ $ageGroupTeams[0]->ageGroups ?? 0 }} </b>
                
            </h5>
        </div>
        <div class="col-sm-10 mx-auto border mt-5 p-0">
            <p class="text-light text-uppercase text-center p-0 bg-dark m-0 heading_para py-2">
                <strong>{{ __('Teams In Age-Group')}}</strong>
            </p>
           @include('shared.eventschedule.teamsinagegroup')
        </div>
    </div>
</div>
@endsection