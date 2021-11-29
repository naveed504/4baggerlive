<div class="modal fade" id="myModal">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                    <div>
                        <a href="#" class="poup-sinin">SIGN IN</a>
                    </div>
                     @if ($errors->any())
      <div class="alert alert-danger">
            <ul>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </li>
             @endforeach
            </ul>
      </div>
  @endif
                </div>
                <form action="{{ route('login') }}" method="post" class="bagger-form">
                    @csrf
                    <div class="form-group">
                        <div class="inputWithIcon">
                            <input type="email" placeholder="Enter Your Email" class="form-control" name="email">
                            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-group">


                        <div class="inputWithIcon">
                            <input type="password" placeholder="Enter Your password" name="password" class="form-control">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="custom-radio pb-3">
                        <a href="{{route('password.request')}}" class="forgot-psd mb-4">Forgot Password</a>
                    </div>
                    <div class="text-center">
                        <button class="banner-btn btn sign-in-poup">SIGN IN</button>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="text-center">
                    <p>Not a Member ?</p>
                    <a href="{{ route('register') }}">Sign UP</a>
                </div>
            </div>

        </div>
    </div>
</div>
