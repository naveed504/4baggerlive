
    <section class="mt-5" >
      <div class="navbar-wrapper"  style="position: fixed !important; z-index: 999; width: 100% !important;">
        <div class="">
          <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
            <li>
              <i
                class="fas fa-bars mt-1 fa-2x pr-3 custom-bars menu-toggle"
              ></i>
            </li>

            <a class="navbar-brand ml-3 " href="#">
              <img class="img-fluid" src="{{ asset('director_assets/Image/logo-bagger.png') }}" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarText"
              aria-controls="navbarText"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
              
              </ul>
              <span class="navbar-text">
                <div class="d-flex flex-row bd-highlight">
                  <div class="">
                    <div class="dropdown">
                      <a
                        class="btn"
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                      <i class="fas fa-user-circle fa-2x pinkish-color"></i>
                      </a>
                      <div
                        class="dropdown-menu custom-dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                      <a class="dropdown-item" href="#">
                          {{ Auth::user()->name }}</a
                        >
                        <a class="dropdown-item" href="#">
                          <i class="fas fa-cog"></i> Settings</a
                        >
                        <a class="dropdown-item" href="#">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                        <button class="btn " style="margin-left: -11px;margin-bottom: 4px !important" type="submit"> <i class="fas fa-sign-out-alt"></i>logout</button>
                                    </form>
                          
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </span>
            </div>
          </nav>
        </div>
      </div>
    </section>