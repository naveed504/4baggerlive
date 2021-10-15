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
       
        $latestNews = ManageNews::first();
        $officalpartners = OfficialPartner::all();
       
        $recentsections = RecentContentSection::all();
        $sliders =Slider::all();
        return !(Auth::check())
            ? view('frontend.pages.home', compact('sliders','recentsections','officalpartners','latestNews'))
            : redirect()->back();
    } 

    public function showBlog($blogslug)
    {
        $blogdetail = ManageBlog::where('slug', '=', $blogslug)->first();
      
        return view('frontend.pages.blogdetail', compact('blogdetail'));

    }

    public function recentContentDetail($id)
    {
        $detail = RecentContentSection::find($id);
       
        return view('frontend.pages.recentcontentdetail', compact('detail'));
        
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
       
        return view('frontend.pages.aboutus');
    }
}
