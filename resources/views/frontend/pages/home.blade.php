@extends('frontend.master')
@section('content')
<section class="">
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('danger'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
        @endif
        <div>
            <h4 class="inner__heading">RECENT 4 Bagger CONTENT </h4>
            
        </div>
        <div class="row">
            @forelse($recentsections as $recentsection)
            <div class="col-lg-3 col-md-4 col_leftspace">
                <div class="inner__wrapper--one">
                    <img src="{{ asset('admin/allimages/'.$recentsection->image) }}" class="img-fluid w-100" alt="" style="height:200px;">
                    <div class="text__overly__inner">
                      <a href="{{ route('recentcontentdetail', $recentsection->id) }}" class="nav-link"><p class="text_ovelay">{{ $recentsection->title }}: <br> {{ date('M-d-Y', strtotime($recentsection->created_at)) }} </p></a>
                    </div>
                </div>
            </div>
            @empty 
            <h5>No Record Found</h5>
            @endforelse
           
        </div>
    </div>
</section>

{{-- section 2 --}}
<section class="wrapper__two-bg">
    <div class="container">
        <div class="text-center">
            <h2 class="heading-one">{{ $latestNews->heading_one ?? ''}}</h2>
            <h3 class="heading-two">{{ $latestNews->heading_two ??'' }} </h3>
            <p class="label__wrapper"> {{ $latestNews->content ?? '' }}</p>

            
        </div>
    </div>
</section>

{{-- section 3 --}}
<section class="section__inner--wrapper">
    <div class="container">
        <div>
            <h4 class="inner__heading">4 Bagger OFFICIAL PARTNERS</h4>
        </div>
        <div class="row">
            @forelse($officalpartners as $officalpartner)
            <div class="col-lg-4 col-md-4 col__padding-5">
                <img src="{{ asset('admin/allimages/'. $officalpartner->image) }}" class="img-fluid w-100" alt="" style="height:250px">
                <div class="margin__wrapper-one">
                    <h3 class="heading__wrapper-four">{{ $officalpartner->title }} </h3>
                    <p class="label__wrapper--four">{{ Str::limit(strip_tags($officalpartner->detail),300) }}</p>
                </div>
            </div>
            @empty 
            <h5>No Record Found</h5>
            @endforelse
        </div>
    </div>
</section>

{{-- section 4 --}}
<section class="bg__baner-one">
    <div class="bg__brown"></div>
    <div class="container">
        <div>
            <div class="text-left">
                <h2 class="heading-one text-white">{{ $generalSetting->mission_bgimgtitle ?? '' }}</h2>
                <p class="label__wrapper text-white"> {{ $generalSetting->mission_bgimgcontent ?? ''}}</p>
            </div>
        </div>
    </div>
</section>

{{-- section 4 --}}

{{-- section 5 --}}
<section class="select-inner">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div>
                    <select class="custom-select select__custm__wrapper" id="inputGroupSelect01">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div>
                    <select class="custom-select select__custm__wrapper" id="inputGroupSelect012">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div>
                    <select class="custom-select select__custm__wrapper" id="inputGroupSelect013">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div>
                    <select class="custom-select select__custm__wrapper" id="inputGroupSelect014">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
