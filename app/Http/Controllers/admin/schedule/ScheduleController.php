<?php

namespace App\Http\Controllers\admin\schedule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule\Schedule;
use App\Models\Event\Event;
use App\Models\Team\Team;
use App\Schedular\RoundRobin;

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
        foreach($request->teamsinagegroup as $teams) {
            if($teams <2) {
                parent::dangerMessage("Each Age Group Must be More Then Two Teams");
                return redirect()->back();
            }
        }
        $eventresult = Event::with('team')->find($request->eventid);
        $teamids= [];
        foreach($eventresult->team as $team) {
            array_push($teamids, $team->id);
        }

        $pieces = array_chunk($teamids, ceil(count($teamids) / 2));
        $a = array();
        $time= array(
            '7:00 AM',
            '10:30 AM',
            '02:00 PM',
            '05:30 PM',
            '09:00 PM',
        );
        foreach($pieces as $key => $var){
            $test = new RoundRobin($var,$time);
            $rr = $test->buildWithoutLeg()->setDates('2021-08-12', '2021-08-19')->schedule();
           
            array_push($a,$rr);
        }
        $teamMatches= $a;
        return view('admin.pages.schedule.showschedule',compact('teamMatches','eventresult' ));

       
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
