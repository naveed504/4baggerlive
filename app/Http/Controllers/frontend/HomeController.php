<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
use App\Models\Event\Event;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return !(Auth::check())
            ? view('frontend.pages.home')
            : redirect()->back();
    }

    public function allEvents()
    {
        $month = date('m');
        $events = Event::whereRaw("month(created_at) >= {$month}")->where('approved', 1)->get();



        return view('frontend.pages.event.index', compact('events'));
    }

    public function register()
    {

        return view('frontend.modals.register');
    }
}
