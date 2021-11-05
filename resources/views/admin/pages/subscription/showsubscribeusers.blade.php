@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-sm-12">
            <h4 class="bg-light p-3 mt-2">
           Subscribed Users
            </h4>
    </div>
     <div class="container mb-5">
      <br><br>
       

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Mbl Number</th>
                                                        <th>Plan Type</th>
                                                        <th>Payment Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($subscribedUsers as $user)
                                                  
                                                    <tr>
                                                        <td>{{ $loop->iteration}}</td>
                                                        <td>{{ $user->subscribeusers->name}}</td>
                                                        <td>{{ $user->subscribeusers->email}}</td>
                                                        <td>{{ $user->subscribeusers->cell_number}}</td>
                                                        <td>
                                                          
                                                        @if($user->subscriptiondata->plan_type == 1 ) {{ "Silver"}}
                                                            @elseif($user->subscriptiondata->plan_type == 3 ) {{ "Diamond"}}
                                                            @elseif($user->subscriptiondata->plan_type == 6 ) {{ "Gold"}}
                                                            @endif
                                                        </td>
                                                        <td>@if($user->payment_status == 1) <span class="badge badge-pill badge-success">{{ "Paid" }}</span> @else <span class="badge badge-pill badge-warning">{{ "Pending" }}</span> @endif</td>

                                                    </tr>
                                                    @empty
                                                    <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>No Record Found</td>
                                                    </tr>

                                                    @endforelse

                                                  

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                               
              
      
    </div>
</div>
@endsection

