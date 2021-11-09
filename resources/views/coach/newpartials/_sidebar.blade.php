@auth
<ul class="sidebar-nav ">
              <li class="active">
                <a href="{{route('team_dashboard')}}">
                <i class="fas fa-tachometer-alt iconsetting"></i>
                  <span >Dashboard</span>
                </a>
              </li>
              <li>
                <a href="{{ route('allevents') }}">
                <i class="fas fa-calendar-alt iconsetting"></i>
                  <span>All Events</span>
                </a>
              </li>
              <li>
                <a href="{{ route('teams.create') }}">
                <i class="fas fa-user-plus iconsetting" ></i>
                  <span >Create Team</span>
                </a>
              </li>
      
              <li>
                <a href="{{ route('teams.index') }}">
                <i class="fas fa-users iconsetting"></i>
                  <span>View Teams</span>
                </a>
              </li>
             
           
                 
 </ul>
 @endauth