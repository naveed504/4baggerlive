@extends('frontend.master')
@section('content')
<section class="space__tp--wrapper ">
  <section class="contact_bg_1">
       <div class="container custom-content">
           <div class="row">
               <div class="col-md-12">
                   <div class="privacy-content text-light ">
                       <h1 class="font-weight-bold office_heading-1 pt-3 px-1">PRIVACY POLICY</h1>
                       <ul>
                           @forelse($siterules as $rules)
                          <li><img src="{{ asset('images/about-circle_1.png') }}" alt="image"> {{ $rules->rule }}
                          </li>
                          @empty
                          <li> No Rules Found</li>
                          @endforelse
                       </ul>
                          
                   </div>
               </div>
           </div>
       </div>

  
    </section>
  

</section>
@endsection