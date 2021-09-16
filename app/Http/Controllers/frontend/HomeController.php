<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
use App\Models\Event\Event;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\slider\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $sliders =Slider::all();
        return !(Auth::check())
            ? view('frontend.pages.home', compact('sliders'))
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

    public function contactUs()
    {
        return view('frontend.pages.contactus');
    }

    public function rulesPolicy()
    {
        return view('frontend.pages.rulespolicy');
    }

    public function aboutUs()
    {
        return view('frontend.pages.aboutUs');
    }
}
