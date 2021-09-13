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
              src="{{ asset('admin/profilesettings/'.Auth::user()->profile_photo )}}"
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
          

          <a class="nav-link" href="{{ route('servicefee.index') }}">
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
