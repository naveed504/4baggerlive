<!DOCTYPE html>
<html lang="en">
  
  @include('coach.newpartials._head')
  @include('coach.modals.login')
  @stack('css')
 
  <body>
  @include('coach.newpartials._navbar')  

    <section>
      <div class="container-fluid">
        <div id="wrapper">       
          <div id="sidebar-wrapper">
             @include('coach.newpartials._sidebar')
          </div>
          <div id="page-content-wrapper">
            <section class="mt-5">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12" style="padding-right: 0px !important; !important;margin-top: 90px;">
                    <!-- <div class="dashboard-main-heading">
                      <h4 class="text-dark p-3 pl-3" >Pellentesque in ipsum id orci porta dapibus.</h4>
                    </div> -->
                @yield('content')
                  </div>
                </div>
            </div>
                
            </section>
          </div>
        </div>
      </div>
    </section>

    @include('coach.newpartials._scripts')
    @include('modals.deleteModal')
  </body>
  @toastr_render
</html>
