<div id="layoutSidenav_nav">
  <nav class="sb-sidenav sticky accordion sidebar--gradient" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="text-center mr-top-2">
          <img class="dashboard-icon-border" src="{{ asset('admin/allimages/'.Auth::user()->profile_photo )}}" alt="" />
          <p class="heading-wrapper--one">John Smith</p>
          <p class="label__wrapper--one">CEO</p>
        </div>
        <a class="nav-link" href="{{ route('admin_dashboard') }}">
          <div class="sb-nav-link-icon">
            <i class="fas fa-tachometer-alt"></i>
          </div>
          Dashboard
        </a>
        <a class="nav-link @if(Str::contains(url()->current(), 'admin/director')) active @endif" href="{{ route('director.index') }}">
          <div class="sb-nav-link-icon">
            <i class="far fa-edit"></i>
          </div>
          Manage Directors
        </a>
        <a class="nav-link @if(Str::contains(url()->current(), 'adminteams')) active @endif" href="{{ route('adminteams.index') }}">
          <div class="sb-nav-link-icon">
            <i class="fas fa-users"></i>
          </div>
          Manage Teams
        </a>
        <a class="nav-link" href="{{ route('player.index') }}">
          <div class="sb-nav-link-icon">
            <i class="fas fa-football-ball"></i>
          </div>
          Manage Players
        </a>
        <a class="nav-link" href="{{ route('adminpayout.index') }}">
          <div class="sb-nav-link-icon">
            <i class="fas fa-money-check-alt"></i>

          </div>
          Manage Payouts
        </a>


        <a class="nav-link" href="{{ route('servicefee') }}">
          <div class="sb-nav-link-icon">
            <i class="fas fa-money-check-alt"></i>

          </div>
          Manage Service Fee
        </a>
        <a class="nav-link" href="{{ route('subscription.index') }}">
          <div class="sb-nav-link-icon">
            <i class="far fa-calendar-alt"></i>
          </div>
          Manage Subscriptions
        </a>
        <a class="nav-link" href="{{ route('manageprofile') }}">
          <div class="sb-nav-link-icon">
            <i class="far fa-calendar-alt"></i>
          </div>
          Manage Profile
        </a>

        <!-- <div class="accordion" >
    <ul class="list-unstyled" >
          <li class="custom-btnnn accordion" id="accordionExample">
            <div class="btn-group">
              <button type="button"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="btn btn-danger dropdown-toggle"  aria-haspopup="true" aria-expanded="false">
                Action
              </button>
              <div class="dropdown-menu collapse " id="collapseOne"  aria-labelledby="headingOne" data-parent="#accordionExample">
                <a class="dropdown-item" href="{{ route('generalsetting') }}">General Setting</a>
                <a class="dropdown-item" href="{{ route('adminslider.index') }}">Slider Section</a>
                <a class="dropdown-item" href="{{ route('manageblog.index') }}">Blog Section</a>
                <a class="dropdown-item" href="{{ route('newssection.create') }}">News Section</a>
                <a class="dropdown-item" href="{{ route('manageblog.index') }}">Blog Section</a>
                <a class="dropdown-item" href="{{ route('recentcontent.index') }}">Recent Content Section</a>
                <a class="dropdown-item" href="{{ route('officialpartner.index') }}">Official Partner Section</a>
              </div>
            </div>
          </li>
        </ul>
    </div > -->
      </div>
      <!-- collapsible setting start  -->
      <div id="accordion" class="accordion custom-acordion ">
        <div class="card acco-card mb-0 " style="background-color: transparent !important;">
          <div class="onclick-toggle">
            <a class=" text-light ml-2 nav-link "><i class="fas fa-cog  mr-1"></i>
              Settings <i class="fas fa-chevron-down float-right mt-2"></i>
            </a>
          </div>
          <div class="toggle-list collapse text-light" data-parent="#accordion">
            <ul class="list-unstyled ml-4" style="width: 200px;">
              <li>
                <div>
                  <a class="nav-link" href="{{ route('generalsetting') }}">General Setting</a>
                  <a class="nav-link" href="{{ route('adminslider.index') }}">Slider Section</a>
                  <a class="nav-link" href="{{ route('manageblog.index') }}">Blog Section</a>
                  <a class="nav-link" href="{{ route('newssection.create') }}">News Section</a>
                  <a class="nav-link" href="{{ route('manageblog.index') }}">Blog Section</a>
                  <a class="nav-link" href="{{ route('recentcontent.index') }}">Recent Content Section</a>
                  <a class="nav-link" href="{{ route('officialpartner.index') }}">Official Partner Section</a>
                </div>

              </li>
            </ul>
          </div>
        </div>
        <!-- collapsible setting end  -->
      </div>
      <a class="nav-link" href="{{ route('managetimeschedule.index') }}">
      <i class="far fa-calendar-alt mr-2 ml-2"></i> Manage Time Schedule
        </a>
    </div>
  </nav>
  
</div>

<script>
  $(document).ready(function(){
    $('.onclick-toggle').click(function(){
      $(".toggle-list").toggle(500);
    });
  });
</script>

