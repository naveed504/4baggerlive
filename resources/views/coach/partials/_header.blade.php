<header>
    <div class="upper-logon">
    	@guest
    	@if (Route::has('login'))

        <div class="custom_container custm__mrtop">

            <span data-toggle="modal" data-target="#myModal"><a href="#"> <img src="{{ asset('images/user.png') }}" /> SIGN IN</a></span>
            	@endif
            	@if (Route::has('register'))

            <span>
      <a href="{{route('register')}}">
        <img src="{{ asset('images/account.png') }}" />CREATE ACCOUNT</a></span>
        </div>
        @endif
                        @else
                        <div >
                               <span>{{ Auth::user()->name }}</span>
                                    
                               </div?

                                <div >
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                        <button class="btn btn__next" style="margin-left: -11px;margin-bottom: 4px;background-color:black !important;margin-top:0px !important;padding: 3px 20px !important;" type="submit">logout</button>
                                    </form>
                                </div>
                        @endguest
    </div>
    @include('coach.partials._topnav')
</header>
