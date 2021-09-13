@extends('frontend.master')
@section('content')
<section class="space__tp--wrapper">
  <section class="contact_bg_1">

      <div class="container">
       <div class="row">
     <div class="col-lg-8 col-md-8">
       
         <div class="row">
         <div class="col-md-4 text-center">
          <i class="fas fa-map-marked-alt custom_iconss"></i>
           <h2 class="office_heading">Our Office</h2>
           <p class="square">Bloomsbury Square, <br> London WC1B 4EA</p>
           </div>
           
           <div class="col-md-4 text-center">
              <i class="fas fa-envelope-open-text custom_iconss"></i>
           <h2 class="office_heading">Email us</h2>
           <p class="square">info@avantage.co.uk<br>
  office@avantage.co.uk</p>
           </div>
           
           
           <div class="col-md-4 text-center">
              <i class="fas fa-phone-slash custom_iconss"></i>
           <h2 class="office_heading">Call us</h2>
           <p class="square">020 7946 020<br>
  020 7996 223</p>
           </div>
       
       
       
       </div>
       
       <div class="clear20"></div>
       <div class="clear20"></div>
        <div class="col-sm-12 contact_us_page">
       <form class="" action="/action_page.php">
    <div class="form-group">
      <label for="email">Your Name *</label>
      <input type="email" class="form-control" placeholder="Enter email" id="email">
    </div>
    <div class="form-group">
      <label for="pwd">Your Email *</label>
      <input type="password" class="form-control" placeholder="Enter password" id="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Subject</label>
      <input type="password" class="form-control" placeholder="Enter password" id="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">Your Message *</label>
      <textarea class="form-control" placeholder="Enter password"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary btn_submit_contact">Submit</button>
  </form>
       </div>
     
     </div>
  
  <div class="col-lg-4 col-md-4 col-sm-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198740.52767361185!2d-77.15466327610147!3d38.893779994169634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7c6de5af6e45b%3A0xc2524522d4885d2a!2sWashington%2C%20DC%2C%20USA!5e0!3m2!1sen!2s!4v1601284155297!5m2!1sen!2s" width="100%" height="575" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
          
          
  </div>
  </div>
</section>
@endsection