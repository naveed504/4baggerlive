<?php

namespace App\Http\Controllers\admin\Event;

use App\Http\Controllers\Controller;
use App\Models\Event\Event;
use App\Models\State;
use App\Services\EventService;
use Illuminate\Http\Request;
use App\Models\Team\Team;
use App\Models\AgeGroup;
use App\Models\Event\EventTimeSchedule;

class ManageEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $event = Event::find($id);
        $active = 2;
        return view('admin.pages.event.show', compact('event', 'active'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $states = State::all();
        $event = Event::find($id);
        $ageGroups = AgeGroup::all();
        $eventTimeSchedule = EventTimeSchedule::all();
        return view('admin.pages.event.edit', compact('event', 'states','ageGroups','eventTimeSchedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventService $event, Request $request, $id)
    {
        // dd($request->all());
        $event->updateEvent($id, $request)
            ? parent::successMessage("Event Updated Successfully")
            : parent::dangerMessage('Oops! We have encountered a problem. Please try again');

        return redirect()->route('director.show', $request->director);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventService $event, $id)
    {

        $event->deleteEvent($id)
            ? parent::successMessage('Event Deleted Successfully')
            : parent::dangerMessage('Team could not be deleted. Please try again');
        return redirect()->back();
    }

    /**
     * Show Total Teams Of Event
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function showAdminTeams($id)
    {
        $event = Event::find($id);
        return view('admin.pages.event.showTeams', compact('event'));
    }

    public function showTeamDetails($id)
    {
        $team = Team::find($id);
        return view('admin.pages.teams.showTeamdetails', compact('team'));
    }
}
