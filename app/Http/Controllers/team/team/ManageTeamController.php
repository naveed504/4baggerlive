<?php

namespace App\Http\Controllers\team\team;

use App\Http\Controllers\Controller;
use App\Models\AgeGroup;
use App\Models\Player\PlayerData;
use App\Models\Request as ModelsRequest;
use App\Models\State;
use Illuminate\Http\Request;
use App\Models\Team\Team;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Services\TeamService;
use Exception;
use Image;
use App\Models\Event\Event;
use App\Models\Event\EventRegisterTeam;

class ManageTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('coach.pages.team.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agegroups =  AgeGroup::all();
        $states = State::all();

        return view('coach.pages.team.create', compact('states','agegroups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  TeamService $team)
    {

        
        if (!empty($request->terms_agreement) && !empty($request->site_agreement)) {

            $team->createTeam(Auth::user()->id, $request) == 'true'
                ? parent::successMessage('Team Created Successfully')
                : parent::dangerMessage("Oops we have encountered a problem. Please try again");

            return redirect()->back();
        } else {
            parent::dangerMessage('Agree to the terms and services');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $team = Team::find($id);
        return view('coach.pages.team.show', compact('team'));
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
        $team = Team::find($id);
        $directorEventState = Event::all();
        $ageGroups = AgeGroup::all();

        return view('coach.pages.team.edit', compact('team', 'states','directorEventState', 'ageGroups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamService $team, Request $request, $id)
    {
      

        $team->updateTeam($id, $request)
            ? parent::successMessage("Team Updated Successfully")
            : parent::dangerMessage("Oops! We have encountered and issue, Please try again");
        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $player_id = PlayerData::find($id);

        $player_id->update([
            'team_id' => null ,
        ]);
        parent::successMessage("Player removed from team");
        return redirect()->back();


    }

    /**
     * Add Team page
     *
     * @param \App\Models\Team\Team::id
     * @return \Illuminate\Http\Response
     */
    public function addPlayer($id)
    {
        $team = Team::find($id);
        $players = $this->getTeamPlayerRequests($team->id); // private call
        return view('coach.pages.team.addplayer', compact('team', 'players'));
    }

    /**
     * View Player Profile Page
     *
     * @param \App\Models\Player::id
     * @return \Illuminate\Http\Response
     */
    public function viewPlayer($id)
    {
        $player = User::find($id);
        return view('coach.pages.player.profile', compact('player'));
    }

    /**
     * Add Players to the team
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function addPlayerToTeam(Request $request)
    {

        $player = User::find($request->player_id);

        if (PlayerData::where('team_id', $request->team_id)->count() <= 30) {
            try {
                $player->player->update([
                    'team_id' => $request->team_id
                ]);
                try {
                    ModelsRequest::where('team_id', $request->team_id)->where('user_id', $request->player_id)->delete();
                    parent::successMessage('Player Added to the team');
                } catch (Exception $e) {
                    parent::dangerMessage('Player could not be added to the team, Please try Again');
                }
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        } else {
            parent::dangerMessage('Team Already full');
        }

        return redirect()->route('teams.show', $request->team_id);
    }

    /**
     * View Player Requests
     *
     * @param \App\Models\Team\Team::id
     * @return \Illuminate\Http\Response
     */
    public function viewRequestedPlayers($id)
    {
        $team = Team::find($id);
        return view('coach.pages.team.viewrequests', compact('team'));
    }

    /**
     * Reject players who have already requested to join team
     *
     * @param \App\Models\Team\Team::id
     * @return \Illuminate\Support\Collection
     */
    private function getTeamPlayerRequests($teamId)
    {
        $players = PlayerData::whereNull('team_id')->get()->reject(function ($player) use ($teamId) {
            if (
                !empty($player->user->request->count() !== 0)
                && ($player->user->request->where('team_id', $teamId)->count() !== 0)
            ) {
                return $player;
            }
        })->map(function ($p) {
            $p->date_of_birth = parent::findAge($p->date_of_birth);
            return $p;
        });

        return $players;
    }

    /**
     * Search Player with provided ID
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function searchPlayer(Request $request)
    {
        $players = PlayerData::with('user')->whereHas('user', function ($q) use ($request) {
            $q->where('type', 4);
            $q->where('email', 'like', '%' . $request->inputsearch . '%');
            $q->orWhere('name', 'like', '%' . $request->inputsearch . '%');
        })->get();
        $team = Team::find($request->team_id);
        return view('coach.pages.team.addplayer', compact('players', 'team'));
    }

    public function deleteteam($id) 
    {
        $results = EventRegisterTeam::where('team_id', $id)->first();
        if(empty($results)) {
            $result= Team::find($id);
            $result->delete();
            parent::successMessage("Team deleted successfully");
            return redirect()->back();            
        } else {
            parent::dangerMessage("Team added into event");
            parent::dangerMessage("You cannot delete this team");
            return redirect()->back();         
        }
       
      

    }

}
