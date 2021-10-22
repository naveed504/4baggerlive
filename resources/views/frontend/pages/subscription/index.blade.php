@extends('frontend.master')
@section('content')
<div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row  equal-height-cards">
                            @forelse ($plans as $item)
                                <div class="col-md-4">
                                    <div class="card pricing-box">
                                        <div class="card-body d-flex flex-column text-center">
                                            <div class="mb-4">
                                                <h3>{{ $item->plan_type . " Months"}}</h3>
                                                <span class="display-4">${!! $item->plan_amount !!}</span>
                                                <span>/mo</span>
                                            </div>
                                            <ul>
                                                @foreach (json_decode($item->plan_des) as $data)
                                                    <li><i class="fa fa-check"></i> {{ $data }}</li>
                                                @endforeach
                                            </ul>
                                           
                                                <a href="{{ route('userpayforsubscription', $item->id)}}" class="btn btn-lg mt-auto card-edit edit_source">Pick a Plan</a>    
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

                       
                    </div>
                </div>
@endsection