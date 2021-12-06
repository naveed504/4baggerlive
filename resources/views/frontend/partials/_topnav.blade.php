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
                        <a class="nav-link active" href="{{ route('welcome') }}">home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Events
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         
                          <a class="dropdown-item" href="{{ route('view.events') }}">Showcases</a>

                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('liveevents') }}">Live Events</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Content
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @php
                                $recentsections = Helpers::getContentData();
                            @endphp
                            @if(!empty($recentsections))
                                @foreach($recentsections as $recentsection)
                                    <a href="{{ route('recentcontentdetail', $recentsection->id) }}" class="dropdown-item">{{ $recentsection->title }}</a>
                                    <div class="dropdown-divider"></div>
                                @endforeach
                            @endif
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('players_in_home') }}">Players</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rules') }}">Rules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contactus') }}">contact us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
