<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            parent::successMessage('Admin Registered successfully');
            return redirect('admin/dashboard');
        } elseif (Auth::user()->type == 2) {

            parent::successMessage('Tournament Director Registered successfully');
            return redirect('director/dashboard');
        } elseif (Auth::user()->type == 3) {

            parent::successMessage('Team Coach Registered successfully');
            return redirect('team/dashboard');
        } else {
            parent::successMessage('Player Registered successfully');
            return redirect('player/profile');
        }
    }
}
