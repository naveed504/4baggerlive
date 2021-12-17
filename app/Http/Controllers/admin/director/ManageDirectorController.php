<?php

namespace App\Http\Controllers\admin\director;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\User;
use App\Services\DirectorService;
use Exception;
use Illuminate\Http\Request;
use App\Models\Event\EventRegisterTeam;
use App\Models\AgeGroup;
use App\Models\Player\PlayerData;
use App\Models\ServiceFee;
use App\Models\Event\Event;
use App\Models\CheckAgeGroupStatus;
use App\Models\Payments\RefundPayment;
use App\Models\Payments\Payment;
use App\Models\Director\DirectorData;
use App\Models\Team\Team;

class ManageDirectorController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = User::where('type', 2)->get();
        return view('admin.pages.directors.view', compact('directors'));
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

        $states = State::all();
        $director = User::find($id);
        // assigning state names to state Ids
        $director->director->field_state = json_encode(
            State::select('state_name')
                ->whereIn('id', json_decode($director->director->field_state))
                ->get()->map(function ($state) {
                    return $state->state_name;
                })
        );

        return view('admin.pages.directors.show', compact('director', 'states'));
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
        $director = User::find($id);
        return view('admin.pages.directors.edit', compact('director', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DirectorService $director, $id)
    {
        $director->updateDirector($id, $request) == 'updated'
            ? parent::successMessage("Director Updated Successfully")
            : parent::dangerMessage("Profile does not updated. Please try again");

        return redirect()->route('director.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DirectorService $director, $id)
    {
        $director->deleteDirector($id)
            ? parent::successMessage('Director Deleted Successfully')
            : parent::dangerMessage('Oops! We have encountered an error. Please try again later');

        return redirect()->back();
    }

    public function unApprovedDirectors()
    {
        $directors = User::where('type', 2)->where('status', 0)->get();
        return view('admin.pages.directors.approve', compact('directors'));
    }

    public function approveDirectors(Request $request)
    {
        try {
            User::find($request->id)->update([
                'status' => $request->approved
            ]);
            toastr()->success('Director Approved Successfully');
            $response = json_encode(array('response' => 'success'));
        } catch (Exception $e) {
            toastr()->error('Cannot Approve Director, Please Try Again');
            $response = json_encode(array('response' => 'error'));
        }

        return $response;
    }

    public function ageGroupDetails(Request $request)

    {

        $states = State::all();
        $director = User::find($request->userId);
        // assigning state names to state Ids
        $director->director->field_state = json_encode(
            State::select('state_name')
                ->whereIn('id', json_decode($director->director->field_state))
                ->get()->map(function ($state) {
                    return $state->state_name;
                })
        );
        $ageGroupTeams = EventRegisterTeam::where('age_group_id', $request->agegroupId)->where('event_id', $request->eventId)->FetchRelations()->get();
        $ageGroupTeams->map(function ($e) {
            $e->ageGroups = AgeGroup::where('id', $e->age_group_id)->value('age_group');
            return $e;
        });
        return view('admin.pages.directors.eventschedule.teamsinagegroup', compact('ageGroupTeams', 'director', 'states'));
    }

    public function playersInEventTeam(Request $request)
    {
        $states = State::all();
        $director = User::find($request->userId);
        // assigning state names to state Ids
        $director->director->field_state = json_encode(
            State::select('state_name')
                ->whereIn('id', json_decode($director->director->field_state))
                ->get()->map(function ($state) {
                    return $state->state_name;
                })
        );
        $events = EventRegisterTeam::where('event_id', '=', $request->eventId)->where('team_id', '=', $request->teamId)->first();
        $playerinTeam = PlayerData::where('team_id', '=', $events->team_id)->with('team')->with('user')->get();
        return view('admin.pages.directors.eventschedule.playersinteam', compact('playerinTeam', 'events', 'director', 'states'));
    }

    public function eventHistory(Request $request)
    {
        $states = State::all();
        $director = User::find($request->userId);
        // assigning state names to state Ids
        $director->director->field_state = json_encode(
            State::select('state_name')
                ->whereIn('id', json_decode($director->director->field_state))
                ->get()->map(function ($state) {
                    return $state->state_name;
                })
        );
        $payments = EventRegisterTeam::where('event_id', $request->eventId)->FetchRelations()->get();
        $servicefee = ServiceFee::first();
        return view('admin.pages.directors.eventschedule.eventhistory', compact('payments', 'servicefee', 'director', 'states'));
    }

    public function changeagegroupstaus(Request $request)
    {
        $result = CheckAgeGroupStatus::where('age_group_id', $request->agegroupid)->where('event_id', $request->eventid)->first();
        if ($result->status == "open") {
            $result->update([
                'status' => "close"
            ]);
        } else {
            $result->update([
                'status' => "open"
            ]);
        }

        return response()->json(['status' => 'updated']);
    }

    public function approveDirector(Request $request)
    {
        $result = User::where('id', $request->userid)->first();

        if ($result->status == 0) {
            $result->update([
                'status' => 1
            ]);
        } else {
            $result->update([
                'status' => 0
            ]);
        }
        return response()->json(['status' => 'updated']);

    }

    public function deletedirectorHistory($id)
    {     
        $allevents =Event::where('user_id',$id)->get();
        foreach($allevents as $singleevent){
            $teamcoaches = User::where('director_id', $id)->get();
            CheckAgeGroupStatus::where('event_id' , $singleevent->id)->delete();         
                $counteventregteams = EventRegisterTeam::where('event_id', $singleevent->id)->count();
              
                if($counteventregteams > 0) {
                    $eventregteams = EventRegisterTeam::where('event_id', $singleevent->id)->get();
                    foreach($eventregteams as $regteam) {
                        RefundPayment::where('event_register_team_id', $regteam->id)->delete();  
                        Payment::where('event_id', $singleevent->id)->delete();  
                        EventRegisterTeam::where('event_id',$singleevent->id)->delete();   
                        Team::where('event_id', $singleevent->id)->delete();
                        User::where('director_id', $id)->delete(); 
                        $firstevent =Event::where('user_id',$id)->first();     
                        $firstevent->delete();             
                     }  

                } else {

                    Team::where('event_id', $singleevent->id)->delete();
                    User::where('director_id', $id)->delete();
                }                                    
        }
        DirectorData::where('user_id', $id)->delete();
        $result =User::find($id);
        $result->delete();
        parent::successMessage("Director History removed successfully");
       return redirect()->back();
    }
}
