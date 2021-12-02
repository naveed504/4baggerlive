@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h4 class="bg-light p-3 mt-2">
           Manage Payouts
        </h4>
    </div>
    <div class="col-sm-12 text-right my-3">
    </div>
    <div class="col-sm-12 table-responsive mm_table_main">
         @include('shared.payouts.payout')
   </div>
</div>
@endsection
