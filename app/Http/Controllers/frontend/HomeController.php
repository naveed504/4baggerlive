<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
use App\Models\Event\Event;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\General\Slider;
use App\Models\General\GeneralSetting;
use App\Models\General\RecentContentSection;
use App\Models\General\OfficialPartner;
use App\Models\General\ManageBlog;
use App\Models\General\ManageNews;

use Exception;

class HomeController extends Controller
{
    public function allEvents()
    {
        $month = date('m');
        $events = Event::whereRaw("month(created_at) >= {$month}")->where('approved', 1)->get();
        return view('frontend.pages.event.index', compact('events'));
    }

    public function index()
    {
        $blogs = ManageBlog::all();
        $latestNews = ManageNews::first();
        $officalpartners = OfficialPartner::all();
        $generalSetting = GeneralSetting::first();
        $recentsections = RecentContentSection::all();
        $sliders =Slider::all();
        return !(Auth::check())
            ? view('frontend.pages.home', compact('sliders','recentsections','officalpartners','generalSetting','blogs','latestNews'))
            : redirect()->back();
    } 

    public function showBlog($blogslug)
    {
        $blogdetail = ManageBlog::where('slug', '=', $blogslug)->first();
        $generalSetting = GeneralSetting::first();
        $blogs = ManageBlog::all();
        return view('frontend.pages.blogdetail', compact('blogdetail','generalSetting','blogs'));

    }

    public function recentContentDetail($id)
    {
        $detail = RecentContentSection::find($id);
        $generalSetting = GeneralSetting::first();
        $blogs = ManageBlog::all();
        return view('frontend.pages.recentcontentdetail', compact('detail','generalSetting','blogs'));
        
    }

    public function register()
    {
        return view('frontend.modals.register');
    }

    public function contactUs()
    {
        $setting =GeneralSetting::first();
        return view('frontend.pages.contactus',compact('setting'));
    }

    public function rulesPolicy()
    {
        return view('frontend.pages.rulespolicy');
    }

    public function aboutUs()
    {
        
        return view('frontend.pages.aboutus');
    }
}
