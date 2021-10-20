<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Event\Event;
use Illuminate\Http\Request;

class FrontendEventController extends Controller
{
    public function viewEvent($id)
    {       
        $event = Event::find($id);
        $active = 2;
        return view('frontend.pages.event.view', compact('event', 'active'));
    }

    public function liveEvents()
    {
        $currentDate = date('Y-m-d');
    
        $eventResults = Event::with('agegroup')->where('end_date', '>', $currentDate )->get();
        return view('frontend.pages.event.liveevents',compact('eventResults'));
    }
}
