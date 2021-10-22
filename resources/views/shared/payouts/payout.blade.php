
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

                @forelse($payments as $payment)
                    <tr>
                       
                        <?php $refAmount = 0 ?>
                        @foreach($payment->checkRefundpayments as $refundtable)
                        <?php $refAmount += $refundtable->refund_amount ?>
                        @endforeach

                        <?php $adminServiceFee=  $servicefee->servicefee / 100 * $payment->events->entry_fee ?>
                        <?php $totalAmount =  $payment->events->entry_fee + $adminServiceFee ;
                              $remainingAmount = $totalAmount - $refAmount  ?>

                        <td> {{$loop->iteration}} </td>
                        <td> {{  $payment->events->event_name }} </td>
                        <td> {{ $payment->teams->team_name }} </td>
                        <td> {{ $payment->users->name}} </td>
                        <td> {{ $payment->payments->transaction_no ?? "N/A" }} </td>
                        @if(Auth::user()->type == 1) <td> {{ round($adminServiceFee ,2) }} </td> @endif
                        <td>  @if(isset($payment->payments->director_amount)) {{ round($payment->payments->director_amount ,2) }} @else  {{ "N/A" }}  @endif</td>
                        <td> {{ round( $payment->events->entry_fee + $adminServiceFee ,2)   }} </td>
                        <td> @if(empty($refAmount)) {{ "N/A" }} @else {{ round($refAmount ,2) }} @endif</td>
                        <td> {{ round($remainingAmount ,2) }}   </td>
                        <td>@if($payment->payment_status == 1) <span class="badge badge-pill badge-success">{{ "Paid" }}</span> @else <span class="badge badge-pill badge-warning">{{ "Pending" }}</span> @endif</td>
                      
                            <td>
                                @if($payment->payment_status != 0)
                                <!-- @if(Auth::user()->type == 2)
                                    <div class="btn-group">
                                    <a href="{{ route('paymentrefundform', $payment->payments_id) }}" >
                                        <i class="fa fa-credit-card text-info font-large mr-1" aria-hidden="true"></i>
                                    </a>
                                    </div>
                                @endif -->
                                @if(Auth::user()->type == 1)
                                    <div class="btn-group">
                                    <a href="{{ route('adminpaymentrefundform', $payment->payments_id) }}" >
                                        <i class="fa fa-credit-card text-info font-large mr-1" aria-hidden="true"></i>
                                    </a>
                                    </div>
                                @endif
                                @endif
                            </td>
                      

                    </tr>
                    @empty
                    <td colspan="8" class="text-center">
                        <strong class="text-uppercase">No Payout Record Found</strong>
                    </td>
                 @endforelse
            </tbody>
        </table>
