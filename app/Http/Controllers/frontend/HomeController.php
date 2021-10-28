<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
use App\Models\Event\Event;
use Illuminate\Http\Request;
use App\Models\Player\PlayerData;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\General\Slider;
use App\Models\General\GeneralSetting;
use App\Models\General\RecentContentSection;
use App\Models\General\OfficialPartner;
use App\Models\General\ManageBlog;
use App\Models\General\ManageNews;
use App\Models\General\SiteRule;
use App\Models\General\AboutUs;
use App\Models\subscription\SubscriptionPaymentPlan;
use App\Models\subscription\SubscriptionPlan;
use App\AuthorizeNet\PaymentGateway;
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
use App\Services\SubscriptionPlanService;


use Exception;

class HomeController extends Controller
{

    public function __construct(SubscriptionPlanService $subscriptionservice)
    {
        $this->subscriptionservice = $subscriptionservice;
    }

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
        $generalSetting = GeneralSetting::first();
        return  view('frontend.pages.home', compact('sliders','recentsections','officalpartners','latestNews','generalSetting'));
    } 

    public function showBlog($blogslug)
    {
        $blogdetail = ManageBlog::where('slug', '=', $blogslug)->first();
        return view('frontend.pages.blogdetail', compact('blogdetail'));
    }

    public function recentContentDetail($id)
    {
        if(Auth::check()) {
            $currentuser = Auth::user()->id;
            $subscriptionoffer = SubscriptionPaymentPlan::where('user_id',$currentuser)->first();
           if($subscriptionoffer == null) {
                parent::dangerMessage("You have no subscription plan");
                parent::dangerMessage("Continue to read article please select subscription plan");
                $plans = SubscriptionPlan::all();
                return view('frontend.pages.subscription.index',compact('plans'));
           }else {
                $detail = RecentContentSection::find($id);
                return view('frontend.pages.recentcontentdetail', compact('detail'));
           }            
        } else {
            parent::dangerMessage("Please login your account");
            parent::dangerMessage("Please select subscription Plan");
          return redirect()->route('register');
        }    
    }

    public function register()
    {
        return view('frontend.modals.register');
    }

    public function contactUs()
    {        
        $setting = GeneralSetting::first();
        return view('frontend.pages.contactus',compact('setting'));
    }

    public function rulesPolicy()
    {
        $siterules= SiteRule::all();      
        return view('frontend.pages.rulespolicy', compact('siterules'));
    }

    public function aboutUs()
    {
        $aboutus = AboutUs::first();       
        return view('frontend.pages.aboutus',compact('aboutus'));
    }

    public function subscriptionForm($id) 
    {
        $item = SubscriptionPlan::find($id);
        return view('frontend.pages.subscription.subscriptionform',compact('item'));
    }

    public function playersInHome()
    {
        $players =PlayerData::with('user')->get();
        return view('frontend.pages.player.showPlayer',compact('players'));
    }

    public function playersearchinHome(Request $request)
    {
        $players = PlayerData::with('user')->whereHas('user', function ($q) use ($request) {
            $q->where('type', 4);
            $q->where('email', 'like', '%' . $request->inputsearch . '%');
            $q->orWhere('name', 'like', '%' . $request->inputsearch . '%');
        })->get();
        return view('frontend.pages.player.showPlayer',compact('players'));
    }
    
    public function playerProfileinHome($id)
    {
        $player =User::find($id);
        return view('frontend.pages.player.profile', compact('player'));
    }


    public function userPayForSubscribePlan(Request $request, PaymentGateway $payment)
    {
            $input = $request->all();
                $response = $payment->setPaymentData($request->all())
                    ->setRefId()
                    ->paymentType()
                    ->transactionRequest()
                    ->call();
                  
                if ($response != null) {
                    if ($response->getMessages()->getResultCode() == "Ok") {
                        $tresponse = $response->getTransactionResponse();
                      
                        $this->subscriptionservice->saveSubscriptionPlanTransaction($tresponse, $input);
                    } else {
                        $errorno2  = 2;
                        parent::transFailMsg($errorno2); //err 2
                        $tresponse = $response->getTransactionResponse();
                    }
                } else {
                    $errorno3 = 3;
                    parent::transFailMsg($errorno3); //err 3
                }
            
             return redirect()->route('welcome');        
    }
}
