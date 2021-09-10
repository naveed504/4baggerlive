@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-right my-3">
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addSubscriptionPlan">
                    <i class="fas fa-plus"></i>Add Subscription
                </button>
            </div>
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-ctabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Monthly</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row  equal-height-cards">
                            @forelse ($plans as $item)
                                <div class="col-md-4">
                                    <div class="card pricing-box">
                                        <div class="card-body d-flex flex-column text-center">
                                            <div class="mb-4">
                                                <h3>{!! $item->plan_name !!}</h3>
                                                <span class="display-4">${!! $item->plan_amount !!}</span>
                                                <span>/mo</span>
                                            </div>
                                            <ul>
                                                @foreach (json_decode($item->plan_des) as $data)
                                                    <li><i class="fa fa-check"></i> {!! $data !!}</li>
                                                @endforeach
                                            </ul>
                                           <!--  <a href="#" class="btn btn-lg mt-auto card-edit" data-id="{{ $item->id }}"
                                                data-toggle="modal" data-target="#edit_plan">Edit</a> -->
                                            <a href="javascript:;" class="btn btn-lg mt-auto card-edit edit_source" data-id="{{ $item->id }}">Edit</a>    
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-md-4">
                                    <div class="card pricing-box">
                                        <div class="card-body d-flex flex-column text-center">
                                            <div class="mb-4">
                                                <h3>Free</h3>
                                                <span class="display-4">$0</span>
                                                <span>/mo</span>
                                            </div>
                                            <ul>
                                                <li><i class="fa fa-check"></i> <b>Unlimited Users </b></li>
                                                <li><i class="fa fa-check"></i> Unlimited Projects</li>
                                                <li><i class="fa fa-check"></i> 500 GB Storage</li>
                                                <li><i class="fa fa-check"></i> Unlimited Message</li>
                                                <li><i class="fa fa-check"></i> Voice and Video Call</li>
                                                <li><i class="fa fa-check"></i> 24/7 Customer Support</li>
                                            </ul>
                                            <a href="javascript:;" class="btn btn-lg mt-auto edit_plan">Edit</a>
                                        </div>
                                    </div>
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
                                                            <th>Modified Date</th>
                                                            <th>Amount</th>
                                                            <th>Subscribed Users</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Free Trial</td>
                                                            <td>Monthly</td>
                                                            <td>9 Nov 2019</td>
                                                            <td>8 Dec 2019</td>
                                                            <td>Free</td>
                                                            <td><a class="btn btn-info btn-sm"
                                                                    href="subscribed-companies.html">30 Users</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Professional</td>
                                                            <td>Monthly</td>
                                                            <td>9 Nov 2019</td>
                                                            <td>8 Dec 2019</td>
                                                            <td>$21</td>
                                                            <td><a class="btn btn-info btn-sm"
                                                                    href="subscribed-companies.html">97 Users</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Enterprise</td>
                                                            <td>Monthly</td>
                                                            <td>9 Nov 2019</td>
                                                            <td>8 Dec 2019</td>
                                                            <td>$38</td>
                                                            <td><a class="btn btn-info btn-sm"
                                                                    href="subscribed-companies.html">125 Users</a>
                                                            </td>
                                                        </tr>
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
    <div class="modal fade" id="addSubscriptionPlan" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header heading_para text-uppercase text-light">
                    <h5><strong>Monthly Package</strong></h5>
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
    <div class="modal fade" id="editSubscriptionPlan" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
@endsection
