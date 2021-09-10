<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showLoginForm()
    {
        return view('frontend.pages.home');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        if (Auth::user()->type == 1) {
            parent::successMessage('Admin Login successfully');
            return redirect('admin/dashboard');
        } elseif (Auth::user()->type == 2) {
            if (Auth::user()->status == 0) {
                Auth::logout();
                parent::dangerMessage('Your account is not approved by admin, Please try again later');
                return redirect()->back();
            } else {
                parent::successMessage('Tournament Director Login successfully');
                return redirect('director/dashboard');
            }
        } elseif (Auth::user()->type == 3) {
            parent::successMessage('Team Coach Login successfully');
            return redirect('team/dashboard');
        } else {
            parent::successMessage('Player Login successfully');
            return redirect('player/profile');
        }
    }
}
