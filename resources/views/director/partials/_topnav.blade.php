<div class="navigation">
    <div class="custom_container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <!-- Brand -->
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" class="logo" alt="" /></a>

            <div class="d-flex flex-row-reverse justify-content-between for-mobile-device">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav ml-auto navbar-center custom-size">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">home</a>
                    </li>
                    <li class="nav-item">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#">contact us</a>
                    </li>
                    @auth
                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Manage Team
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('team.create') }}">Create Teams</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('team.index') }}">View Teams</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Manage Event
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('event.create') }}">Create Event</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('event.index') }}">View Event</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Manage Payouts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <!-- Here we customize the route blade  -->
                          <a class="dropdown-item" href="@route('directorpayout')">Payouts</a>
                        </div>
                    </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</div>

