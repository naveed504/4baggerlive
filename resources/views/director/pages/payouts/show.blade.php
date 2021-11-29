
@extends('director.master')
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
             
        <table class="table">
            <thead>
                <th>#</th>
                <th>Event Name</th>
                <th>Team Name</th>
                <th>Paid By</th>
                <th>Transaction No</th>
                @if(Auth::user()->type == 1) <th>Admin Amout</th>   @endif
                <th>Director Amount</th>
                <th>Total Amount</th>
                <th>Refund Amount</th>
                <th>Remaining Amount</th>
                <th>Payment Status</th>
                @if(Auth::user()->type == 1)
               <th>Refund</th> 
               @endif
            </thead>
            <tbody>
         
                @foreach($payments as $gotorelationstable)
                @foreach($gotorelationstable->eventRegTeams as $payment)

              
               
                    <tr>                    
                        <?php $refAmount = 0 ?>
                        @foreach($payment->checkRefundpayments as $refundtable)
                        <?php $refAmount += $refundtable->refund_amount ?>
                        @endforeach

                        <?php $adminServiceFee=  $servicefee->servicefee / 100 * $gotorelationstable->entry_fee ?>
                        <?php $totalAmount =  $gotorelationstable->entry_fee + $adminServiceFee ;
                              $remainingAmount = $totalAmount - $refAmount  ?>

                        <td> {{$loop->iteration}} </td>
                        <td> {{  $gotorelationstable->event_name }} </td>
                        <td> {{ $payment->teams->team_name }} </td>
                        <td> {{ $payment->users->name}} </td>
                        <td> {{ $payment->payments->transaction_no ?? "N/A" }} </td>
                        @if(Auth::user()->type == 1) <td> {{ round($adminServiceFee ,2) }} </td> @endif
                        <td>  @if(isset($payment->payments->director_amount)) {{ round($payment->payments->director_amount ,2) }} @else  {{ "N/A" }}  @endif</td>
                        <td> {{ round( $gotorelationstable->entry_fee + $adminServiceFee ,2)   }} </td>
                        <td> @if(empty($refAmount)) {{ "N/A" }} @else {{ round($refAmount ,2) }} @endif</td>
                        <td> {{ round($remainingAmount ,2) }}   </td>
                        <td>@if($payment->payment_status == 1) <span class="badge badge-pill badge-success">{{ "Paid" }}</span> @else <span class="badge badge-pill badge-warning">{{ "Pending" }}</span> @endif</td>                     
                        
                    </tr>
                    @endforeach
                   
                 @endforeach
            </tbody>
        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
