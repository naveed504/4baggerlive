<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ************************************************************************ !-->
  <!-- ****                                                              **** !-->
  <!-- ****       ¤ Designed and Developed by  LEADconcept               **** !-->
  <!-- ****               http://www.leadconcept.com                     **** !-->
  <!-- ****                                                              **** !-->
  <!-- ************************************************************************ !-->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="{{ asset('director_assets/css/bootstrap.min.css') }}" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('director_assets/css/style.css')  }}" />

    <title>Dashboard</title>
  </head>
  <body>

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
                          <i class="fas fa-cog"></i> Settings</a
                        >
                        <a class="dropdown-item" href="#">
                          <i class="fas fa-sign-out-alt"></i> Logout
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

    <section>
      <div class="container-fluid">
        <div id="wrapper">
          <!-- ===== sidebar-wrapper start ====== -->
          <div id="sidebar-wrapper">
            <ul class="sidebar-nav ">
              <li class="active">
                <a href="#">
                  <img src="{{ asset('director_assets/image/01.png') }}" alt="image" />
                  <span >Dashboard</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="{{ asset('director_assets/image/02.png')}}" alt="image" />
                  <span>Add Student</span>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="{{ asset('director_assets/image/03.png') }}" alt="image" />
                  <span class=pl-4>List of Students </span>
                </a>
              </li>
      
              <li>
                <a href="#">
                  <img src="{{ asset('director_assets/image/08.png') }}" alt="image" />
                  <span class="pr-3">Schedule</span>
                </a>
              </li>
              <div id="accordion" class="accordion custom-acordion">
                <div class="card acco-card mb-0  " style="background-color: transparent !important; padding:7px 0px;">
                    <div class="onclick-toggle" data-toggle="collapse" href="#subnav" aria-expanded="false">
                        <a class=" text-light  nav-link " id="settings-anchor"><i class="fas fa-cog custom-setting-icon  fa-2x" style="margin-left: -7px; width: 55px; font-size: 20px;" ></i>
                            <span style="font-size: 15px;">Settings </span><i class="fas fa-chevron-down float-right mt-2 "></i>
                        </a>
                    </div>
                    <div class="toggle-list collapse text-light" id="subnav" data-parent="#accordion">
                        <ul class="list-unstyled ml-4" style="width: 200px;">
                            <li>
                                <div>
                                    <a class="nav-link" href="{{ route('generalsetting') }}">General Setting</a>
                                    <a class="nav-link" href="{{ route('adminslider.index') }}">Slider Section</a>
                                    <a class="nav-link" href="{{ route('manageblog.index') }}">Blog Section</a>
                                    <a class="nav-link" href="{{ route('newssection.create') }}">News Section</a>
                                    <a class="nav-link" href="{{ route('manageblog.index') }}">Blog Section</a>
                                    <a class="nav-link" href="{{ route('aboutus.index') }}">About Us</a>
                                    <a class="nav-link" href="{{ route('siterule.index') }}">Rules</a>
                                    <a class="nav-link" href="{{ route('recentcontent.index') }}">Recent Content
                                        Section</a>
                                    <a class="nav-link" href="{{ route('officialpartner.index') }}">Official Partner
                                        Section</a>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
                <!-- collapsible setting end  -->
            </div>
           
           
            </ul>
          </div>
          <!-- ====== sidebar-wrapper end ====== -->

          <!-- ====== page-content-wrapper start ====== -->

          <div id="page-content-wrapper">
            <section class="mt-5">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12" style="padding-right: 0px !important; !important;">
                    <div class="dashboard-main-heading">
                      <h4 class="text-dark p-3 pl-3" >Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div>
                    <div class=" responsive-table">
                      <table class="table table-borderless">
                        <thead class="">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                 
                  </div>
                </div>
              </div>
            </section>
          </div>
          
          <!-- ====== page-content-wrapper end ====== -->
        </div>
      </div>
    </section>




    <script src="{{ asset('director_assets/js/jquery.js') }} "></script>
    <script src="{{ asset('director_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('director_assets/js/script.js') }}"></script>
  </body>
</html>
