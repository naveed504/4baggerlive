<?php

namespace App\Http\Controllers\director\Event;

use App\Http\Controllers\Controller;
use App\Http\Requests\director\CreateEventRequest;
use App\Models\Event\Event;
use App\Models\State;
use App\Models\AgeGroup;
use App\Models\Team\Team;
use App\Models\User;
use App\Models\Event\EventTimeSchedule;
use App\Services\EventService;
use App\Models\Event\EventRegisterTeam;
use App\Models\Player\PlayerData;
use App\Models\ServiceFee;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventResults = Event::with('agegroup')->get();
      

        return view('director.pages.event.index', compact('eventResults'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        $ageGroups = AgeGroup::all();
        $eventTimeSchedule = EventTimeSchedule::all();

        return view('director.pages.event.create', compact('states','ageGroups', 'eventTimeSchedule'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventRequest $request, EventService $event)
    {

        // event service
        $event->createEvent($request)
            ? parent::successMessage('Event Submitted Successfully')
            : parent::dangerMessage('Oops we have encountered an error. Please try again');

        return redirect()->route("event.index");
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
        return view('director.pages.event.view', compact('event', 'active'));
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
        $ageGroups = AgeGroup::all();
        $event = Event::find($id);
        return view('director.pages.event.edit', compact('event', 'states','ageGroups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, EventService $event)
    {

        $event->updateEvent($id, $request)
            ? parent::successMessage("Event Updated Successfully")
            : parent::dangerMessage('Team could not be deleted. Please try again');

        return redirect()->route('event.index');
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
     * Show Teams in Event
     *
     * @param \App\Models\Event\Event::id
     * @return \Illuminate\Http\Response
     */
    public function showTeamsInEvent($id)
    {
        $event = Event::find($id);
        return view('director.pages.event.showTeams', compact('event'));
    }

    /**
     * Show Team Details
     *
     * @param \App\Models\Team\Team::id
     * @return \Illuminate\Http\Response;
     */
    public function showTeamDetails($id)
    {
        $team = Team::find($id);
        return view('director.pages.event.teamdetails', compact('team'));
    }

    /**
     * Show Team Details
     *
     * @param \App\Models\User::id
     * @return \Illuminate\Http\Response;
     */
    public function showPlayer($id)
    {
        $player = User::find($id);
        return view('director.pages.event.showplayer', compact('player'));
    }

    public function ageGroupDetails(Request $request)

    {
      $ageGroupTeams = EventRegisterTeam::where('age_group_id', $request->agegroupId)->where('event_id', $request->eventId)->FetchRelations()->get();
        $ageGroupTeams->map(function($e){
            $e->ageGroups = AgeGroup::where('id', $e->age_group_id)->value('age_group');
            return $e;
        });
        return view('director.pages.event.teamsinagegroup', compact('ageGroupTeams'));

    }


    public function playersInEventTeam(Request $request)
    {
        $events = EventRegisterTeam::where('event_id','=', $request->eventId)->where('team_id','=',$request->teamId)->FetchRelations()->first();
        $playerinTeam = PlayerData::where('team_id','=', $events->team_id)->with('team')->with('user')->get();
        return view('director.pages.event.playersinteam',compact('playerinTeam','events'));
    }

    public function eventHistory($eventid)
    {
           $payments = EventRegisterTeam::where('event_id', $eventid)->FetchRelations()->get();
           $servicefee = ServiceFee::first();
           return view('director.pages.event.eventhistory',compact('payments','servicefee'));

    }


}
