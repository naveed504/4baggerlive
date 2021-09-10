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
        return view('director.pages.event.view', compact('event', 'active'));
    }
}
