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
            <div class="col-lg-3 col-md-4 col_leftspace">
                <div class="inner__wrapper--one">
                    <img src="{{ asset('images/Layer6.png') }}" class="img-fluid w-100" alt="">
                    <div class="text__overly__inner">
                        <p class="text_ovelay">JUCO Rankings Update: <br> April 13 </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col_leftspace">
                <div class="inner__wrapper--one">
                    <img src="{{ asset('images/Layer24.png') }}" class="img-fluid w-100" alt="">
                    <div class="text__overly__inner">
                        <p class="text_ovelay">JUCO Rankings Update: <br> April 13 </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col_leftspace">
                <div class="inner__wrapper--one">
                    <img src="{{ asset('images/Layer26.png') }}" class="img-fluid w-100" alt="">
                    <div class="text__overly__inner">
                        <p class="text_ovelay">JUCO Rankings Update: <br> April 13 </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col_leftspace">
                <div class="inner__wrapper--one">
                    <img src="{{ asset('images/Layer28.png') }}" class="img-fluid w-100" alt="">
                    <div class="text__overly__inner">
                        <p class="text_ovelay">JUCO Rankings Update: <br> April 13 </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col_leftspace">
                <div class="inner__wrapper--one">
                    <img src="{{ asset('images/Layer32.png') }}" class="img-fluid w-100" alt="">
                    <div class="text__overly__inner">
                        <p class="text_ovelay">JUCO Rankings Update: <br> April 13 </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col_leftspace">
                <div class="inner__wrapper--one">
                    <img src="{{ asset('images/Layer34.png') }}" class="img-fluid w-100" alt="">
                    <div class="text__overly__inner">
                        <p class="text_ovelay">JUCO Rankings Update: <br> April 13 </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col_leftspace">
                <div class="inner__wrapper--one">
                    <img src="{{ asset('images/Layer30.png') }}" class="img-fluid w-100" alt="">
                    <div class="text__overly__inner">
                        <p class="text_ovelay">JUCO Rankings Update: <br> April 13 </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col_leftspace">
                <div class="inner__wrapper--one">
                    <img src="{{ asset('images/Layer19.png') }}" class="img-fluid w-100" alt="">
                    <div class="text__overly__inner">
                        <p class="text_ovelay">JUCO Rankings Update: <br> April 13 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- section 2 --}}
<section class="wrapper__two-bg">
    <div class="container">
        <div class="text-center">
            <h2 class="heading-one">Lorem ipsum </h2>
            <h3 class="heading-two">Lorem ipsum is a placeholder text commonly used to demonstrate </h3>
            <p class="label__wrapper"> Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document
                or a typeface without relying on meaningful content. Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>

            
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
            <div class="col-lg-4 col-md-4 col__padding-5">
                <img src="{{ asset('images/img007.png') }}" class="img-fluid w-100" alt="">
                <div class="margin__wrapper-one">
                    <h3 class="heading__wrapper-four">Lorem ipsum is a placeholder text commonly used </h3>
                    <p class="label__wrapper--four">Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col__padding-5">
                <img src="{{ asset('images/img008.png') }}" class="img-fluid w-100 " alt="">
                <div class="margin__wrapper-one">
                    <h3 class="heading__wrapper-four">Lorem ipsum is a placeholder text commonly used </h3>
                    <p class="label__wrapper--four">Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col__padding-5">
                <img src="{{ asset('images/img009.png') }}" class="img-fluid w-100" alt="">
                <div class="margin__wrapper-one">
                    <h3 class="heading__wrapper-four">Lorem ipsum is a placeholder text commonly used </h3>
                    <p class="label__wrapper--four">Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- section 4 --}}
<section class="bg__baner-one">
    <div class="bg__brown"></div>
    <div class="container">
        <div>
            <div class="text-left">
                <h2 class="heading-one text-white">Lorem ipsum </h2>
                <h3 class="heading-two text-white">Lorem ipsum is a placeholder text commonly used to demonstrate </h3>
                <p class="label__wrapper text-white"> Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document
                    or a typeface without relying on meaningful content. Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
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
