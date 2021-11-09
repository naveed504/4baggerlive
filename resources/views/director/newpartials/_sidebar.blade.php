@auth
<ul class="sidebar-nav ">
              <li class="active">
                <a href="{{ route('director_dashboard')}}">
                  <img src="{{ asset('director_assets/image/01.png') }}" alt="image" />
                  <span >Dashboard</span>
                </a>
              </li>
              <li>
                <a href="{{ route('team.create') }}">
                  <img src="{{ asset('director_assets/image/02.png')}}" alt="image" />
                  <span>Create Team</span>
                </a>
              </li>
              <li>
                <a href="{{ route('team.index') }}">
                  <img src="{{ asset('director_assets/image/02.png')}}" alt="image" />
                  <span >View Teams </span>
                </a>
              </li>
      
              <li>
                <a href="{{ route('event.create') }}">
                  <img src="{{ asset('director_assets/image/08.png') }}" alt="image" />
                  <span>Cretae Event</span>
                </a>
              </li>
              <li>
                <a href="{{ route('event.index') }}">
                  <img src="{{ asset('director_assets/image/08.png') }}" alt="image" />
                  <span>View Events</span>
                </a>
              </li>
              <li>
                <a href="{{ route('directorpayout') }}">
                  <img src="{{ asset('director_assets/image/08.png') }}" alt="image" />
                  <span>Payouts</span>
                </a>
              </li>
              <li>
             
              </li>
              <div id="accordion" class="accordion custom-acordion">
                <div class="card acco-card mb-0  " style="background-color: transparent !important; padding:7px 0px;">
                    <div class="onclick-toggle" data-toggle="collapse" href="#subnav" aria-expanded="false">
                        <a class=" text-light  nav-link " id="settings-anchor"><i class="fas fa-cog custom-setting-icon  fa-2x" style="margin-left: -7px; width: 55px; font-size: 20px;" ></i>
                            <span class="pr-3" >Settings </span><i class="fas fa-chevron-down float-right mt-2 "></i>
                        </a>
                    </div>
                    <div class="toggle-list collapse text-light" id="subnav" data-parent="#accordion">
                        <ul class="list-unstyled ml-4" style="width: 200px;">
                            <li>
                                <div>
                                    <a class="nav-link" href="#">Section</a>
                                  
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
              </div>       
 </ul>
 @endauth