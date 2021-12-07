<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event\Event;
use Illuminate\Http\Request;
use Auth;
class FrontendEventController extends Controller
{
    public function viewEvent($id)
    {       
       if(!Auth::check()) 
       {
           parent::dangerMessage("You are not Loged in");
           parent::dangerMessage("Please login as a team coach");
           return redirect()->back();
       }
       return redirect()->back();
        // $event = Event::find($id);
        // $active = 2;
        // return view('frontend.pages.event.view', compact('event', 'active'));
    }

    public function liveEvents()
    {
        $currentDate = date('Y-m-d');    
        $eventResults = Event::with('agegroup')->where('start_date', '>', $currentDate )->where('approved',1 )->get();
        return view('frontend.pages.event.liveevents',compact('eventResults'));
    }

    public function viewShowcaseEvents()
    {          
        $events = Event::where('event_category',2)->where('approved',1)->get();
        return view('frontend.pages.event.index', compact('events'));

    }
}
