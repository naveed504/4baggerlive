<nav class="sb-topnav navbar navbar-expand custm__navbar--wrapper">
    <a class="navbar-brand text-center" href="/"
      ><img src="{{ asset('admin/assets/img/logo.png') }}" alt=""
    /></a>
    <button  class="btn btn-link btn-sm order-1 order-lg-0 btn__toggle__two"  id="sidebarToggle"  href="#!"  >
      <i class="fas fa-bars"></i>
    </button>
    <!-- Navbar Search-->
    <div class="flex__wrapper">
      <form class="form__inner--wrapper">
        <div class="input-group">
          WELCOME TO Dashboard

        </div>
      </form>
      <!-- Navbar-->
      <div class="flex__wrapper--center">
        <div class="mr__right-10">
          <button type="button" class="btn noti-icon">
            <i class="fa fa-bell" aria-hidden="true"></i>
            <span class="badge badge-light">4</span>
          </button>
        </div>
        <div class="dropdown">
          <img
            class="dropdown-toggle"
            src="{{ asset('admin/assets/img/profile.png')}}"
            alt=""
            type="button"
            id="dropdownMenuButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          />

          <div
            class="dropdown-menu dropdown__menu-right"
            aria-labelledby="dropdownMenuButton"
          >
            <a class="dropdown-item" href="{{ route('manageprofile') }}"><i class="fas fa-cog pr-2"></i> Profile</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                <button class="dropdown-item" type="submit"><i class="fas fa-sign-out-alt pr-2"></i>Logout</button>
                                    </form> 
          </div>
        </div>
      </div>
    </div>
  </nav>
