<?php

namespace App\Http\Controllers\team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\Slider;
use App\Models\General\GeneralSetting;
use App\Models\General\RecentContentSection;
use App\Models\General\OfficialPartner;
use App\Models\General\ManageBlog;
use App\Models\General\ManageNews;
class HomeController extends Controller
{

    public function index()
    {
        $latestNews = ManageNews::first();
        $officalpartners = OfficialPartner::all();
        $recentsections = RecentContentSection::all();
        $sliders =Slider::all();
        $generalSetting = GeneralSetting::first();
        return view('coach.pages.dashboard',  compact('sliders','recentsections','officalpartners','latestNews','generalSetting'));

       
    }

    public function showBlog($blogslug)
    {       
        $blogdetail = ManageBlog::where('slug', '=', $blogslug)->first();
        return view('coach.pages.frontendpages.blogdetail', compact('blogdetail'));
    }

    
    
}
