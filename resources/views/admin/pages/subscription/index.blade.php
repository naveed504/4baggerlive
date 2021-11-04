


@extends('admin.master')
@section('content')
<style>
    .custom-edit-btn{
        width: 100px !important;
    }
    .custom-btn-groups{
        position: relative;
        top: 10%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 text-right my-3">
            <a href="{{ route('subscription.create') }}" class="btn btn-success" type="button">
                <i class="fas fa-plus"></i>Add Subscription
            </a>
        </div>
        <div class="col-md-12">
            <ul class="nav nav-tabs nav-ctabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Monthly</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row  equal-height-cards">
                        @forelse ($plans as $item)
                        <div class="col-md-4">
                            <div class="card pricing-box">
                                <div class="card-body d-flex flex-column text-center">
                                    <div class="custom-card-overlay">
                                    <a href="{{ route('subscription.edit', $item->id)}}" style="color: #3b8004;">  <i class="fas fa-pen ml-2 mt-2"></i></a>  <br>
                                       
                                    </div>
                                    <div class="mb-4">
                                        <h3>{{ $item->plan_type . " Months" }}</h3>
                                        <span class="display-4">${!! $item->plan_amount !!}</span>
                                        <span>/
                                            @if($item->plan_type == 1) {{ "Silver" }}
                                            @elseif($item->plan_type == 3) {{ "Gold" }}
                                            @elseif($item->plan_type == 6) {{ "Diamond" }}
                                            @endif
                                            
                                        </span>
                                    </div>
                                    <ul>
                                        @foreach (json_decode($item->plan_des) as $data)
                                        <li><i class="fa fa-check"></i> {!! $data !!}</li>
                                        @endforeach
                                    </ul>
                                    <!--  <a href="#" class="btn btn-lg mt-auto card-edit" data-id="{{ $item->id }}"
                                                data-toggle="modal" data-target="#edit_plan">Edit</a> -->
                                 
                                   <!-- <a href="{{ route('subscription.edit', $item->id)}}" class="btn btn-lg mt-auto card-edit edit_source">Edit</a> -->
                                    <!-- <a href="{{ route('subscription.edit', $item->id)}}" class="btn ml-3 custom-edit-btn mt-auto card-edit edit_source">Delete</a> -->
                                  
                                </div>
                            </div>
                        </div>
                        @empty
                             <div class="col-md-4"></div>
                                <div class="col-md-4">
                                  <h4 style="text: center;">No Subscription Plan Found</h4>
                            </div>
                        @endforelse


                    </div>
                    <div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-table mb-0">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Plan Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Plan</th>
                                                        <th>Plan Type</th>
                                                        <th>Create Date</th>
                                                        <th>Subscribed Users</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($plans as $key => $subscribeuser)

                                                    <tr>
                                                        <td>
                                                            @if($subscribeuser->plan_type == 1 ) {{ "Silver"}}
                                                            @elseif($subscribeuser->plan_type == 3 ) {{ "Diamond"}}
                                                            @elseif($subscribeuser->plan_type == 6 ) {{ "Gold"}}
                                                            @endif
                                                        </td>
                                                        <td>{{ $subscribeuser->plan_type . " Months" }}</td>
                                                        <td>{{ date('M-d-Y ', strtotime($subscribeuser->created_at)) }}</td>
                                                        <td><button class="btn btn-info btn-sm">
                                                                {{$subscribeuser->countusers }}
                                                                Users</button>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>No Record Found</td>
                                                    <tr>
                                                        @endforelse

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Add Plan Modal -->
<div class="modal fade" id="addSubscriptionPlan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header heading_para text-uppercase text-light">
                <h5><strong>Create Package</strong></h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="edit_coach_team" action="{{ route('subscription.store') }}">
                    @csrf
                    @include('shared.subscription.edit_form')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Edit Plan Modal -->
<div class="modal fade" id="editSubscriptionPlan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header heading_para text-uppercase text-light">
                <h5><strong>Monthly Package</strong></h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body update_model">

            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '#planid', function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var planid = $(this).attr("data-planid");
        $.ajax({
            data: {
                planid: planid
            },
            url: "{{ route('showsubscription') }}",
            type: "post",
            dataType: 'json',
            success: function(data) {
                //   $("#addSubscriptionPlan").html(data.html);
                console.log(data.html);

            },

        });


    });
</script>
@endsection