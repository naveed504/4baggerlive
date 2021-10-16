@extends('frontend.master')
@section('content')
<section class="about_bg_1">
  
  <div class="container">
   <div class="row">
 <div class="col-lg-7 col-md-7">
   <div class="about_1_heading"><span> About The Company</span></div>
 
<h3 class="office_heading"> {{ $aboutus->tagline ?? ''}} <br>
</h3>

<p>
  {{ $aboutus->content ?? ''}}
</p>
 
 </div>

<div class="col-lg-5 col-md-5">
<img src="{{ asset('admin/allimages/'. $aboutus->image ?? '') }}" class="img-fluid" alt=""></div>




</div>
</div>

</section>

<div class="container border_about_top">
<div class="row">
 <div class="col-lg-3 col-md-3">
   <div class="font-weight-bold"> <span class="miss">MISSION & VISION</span> </div>
  <div class="about_1_heading miss"><span class="office_heading">Our</span> <br>
<span>Mission</span></div>
</div>
<div class="col-lg-9 col-md-9">
<p class="about_bg_middle_label">
{{ $aboutus->mission_statment ?? ''}}
</p>
 
 </div>





</div>

</div>


@endsection