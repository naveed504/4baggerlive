@auth
<ul class="sidebar-nav ">
              <li class="active">
                <a href="{{route('team_dashboard')}}">
                  <img src="{{ asset('director_assets/image/01.png') }}" alt="image" />
                  <span >Dashboard</span>
                </a>
              </li>
              <li>
                <a href="{{ route('allevents') }}">
                  <img src="{{ asset('director_assets/image/02.png')}}" alt="image" />
                  <span>All Events</span>
                </a>
              </li>
              <li>
                <a href="{{ route('teams.create') }}">
                  <img src="{{ asset('director_assets/image/02.png')}}" alt="image" />
                  <span >Create Team</span>
                </a>
              </li>
      
              <li>
                <a href="{{ route('teams.index') }}">
                  <img src="{{ asset('director_assets/image/08.png') }}" alt="image" />
                  <span>View Teams</span>
                </a>
              </li>
             
           
                 
 </ul>
 @endauth