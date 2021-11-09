<?php

namespace App\Http\Controllers\admin\schedule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule\Schedule;
use App\Models\Event\Event;
use App\Models\Team\Team;
use App\Schedular\RobinRound;
use Helpers;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('admin.pages.schedule.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = Helpers::countTeamsInAgeGroup($request->agegroupid, $request->eventid);
        if($count <3) {
            parent::dangerMessage("Each Age Group Must be More Then Three Teams");
            return redirect()->back();
        }
        $eventresult = Event::find($request->eventid);
        $teams=  Team::where(['age_group_id' =>$request->agegroupid,'event_id'=>$request->eventid])->pluck('id')->toArray();
        $event = Event::find($request->eventid);
        $timeSlot = ['8 am', '10:15 am', '12:30 pm', '2:45 pm', '5 pm', '7:15 pm'];
        $venue = json_decode($event->event_venue);
        $rr = new RobinRound($teams,$venue,$timeSlot);

        $schedular = $rr->teamsPool()->numberOfDays('2021-08-12', '2021-08-19')->matchesByPoolList()->matchDays();
        // dd($schedular);
        return view('admin.pages.schedule.showschedule',compact('schedular','eventresult' ));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
