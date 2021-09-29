<div id="layoutSidenav_nav">
    <nav
      class="sb-sidenav accordion sidebar--gradient"
      id="sidenavAccordion"
    >
      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="text-center mr-top-2">
            <img
              class="dashboard-icon-border"
              src="{{ asset('admin/allimages/'.Auth::user()->profile_photo )}}"
              alt=""
            />
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
        
          <li class="nav-item dropdown">
            <a class="nav-link admindropdown dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Manage Site Setting
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
              <a class="dropdown-item" href="{{ route('generalsetting') }}">General Setting</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item admindrop" href="{{ route('adminslider.index') }}"> Slider Section</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('manageblog.index') }}">Blog Section</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('newssection.create') }}"> News Section</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('recentcontent.index') }}"> Recent Content Section</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('officialpartner.index') }}">Official Partner Section</a>
            </div>
        </li>
          <a class="nav-link" href="#">
            <div class="sb-nav-link-icon">
             <i class="far fa-calendar-alt"></i>
            </div>
          Schedule
          </a>
        </div>
      </div>
    </nav>
  </div>
