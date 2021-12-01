<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team\Team;
use App\Models\Event\EventRegisterTeam;
use App\Models\Event\Event;
use App\Models\subscription\SubscriptionPaymentPlan;
use DB;
use Carbon\Carbon;
class HomeController extends Controller
{
	

    public function index()
    {
        
        $dashboardresults['totalteams'] = Team::count();
        $dashboardresults['activeteams'] =Team::where('active', 1)->count();
        $dashboardresults['teamsinevent'] =EventRegisterTeam::where('payment_status', 1)->count();
        $dashboardresults['totalactiveevents'] =Event::where('approved',1)->count();
        $dashboardresults['totalusers'] =User::count();
        $dashboardresults['totalsubscriptionusers'] = SubscriptionPaymentPlan::where('payment_status', 1)->count();
        $dashboardresults['totalcoach'] =User::where('type',3)->count();
        $dashboardresults['totalplayer'] =User::where('type',4)->count();
        $dashboardresults['teamscount'] = DB::table('teams')->whereMonth('created_at', Carbon::now()->month)->count();
    	$dashboardresults['userscount'] = DB::table('users')->whereMonth('created_at',Carbon::now()->month)->count();
    	$dashboardresults['eventscount'] = DB::table('events')->whereMonth('created_at',Carbon::now()->month)->count();
    	$dashboardresults['teamseventcount'] = DB::table('event_register_teams')->where('payment_status',1)->whereMonth('created_at',Carbon::now()->month)->groupBy('team_id')->count();

    
    
     
        

        return view('admin.pages.dashboard',$dashboardresults);
    }
}
