<?php

namespace App\Http\Controllers\player\team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team\Team;
use App\Models\User;
use App\Services\PlayerService;
use App\Models\Player\PlayerData;
use App\Models\State;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * View all teams
     */
    public function allTeams()
    {
        $allteams = Team::with('user')->get();
        return view('player.pages.allteams', compact('allteams'));
    }

    /**
     * View Team Detail Page
     *
     * @param \App\Models\Team\Team::id
     */
    public function viewTeam($id)
    {
        $team = Team::find($id);
        return view('player.pages.view_single_team', compact('team'));
    }

    /**
     * View All Teams OF Current Loggedin Player
     *
     * @return \Illuminate\Http\Response
     */
    public function myTeam()
    {
        $team = Auth::user()->player->team ?? parent::dangerMessage("Currently you are not in a team");
        return $team == null
            ? redirect()->back()
            : view('player.pages.myteam', compact('team'));
    }

    /**
     * Send playerRequest For team Joining
     *
     * @param  App\Http\Services\PlayerService
     * @param  iluminate\Http\Request
     */
    public function playerRequest(PlayerService $player, Request $request)
    {


        $requestResponse =  $player->playerRequestForTeam($request->all());
        $requestResponse == 'true'
            ? parent::successMessage('Request Send Successfully')
            : parent::dangerMessage('Request does not send.OR wait for request approval');
        return redirect()->back();
    }

    /**
     * View Player Profile
     *
     * @param \App\Models\User::id
     */
    public function viewPlayer($id)
    {
        $player = User::find($id);
        return view('player.pages.profile', compact('player'));
    }

    /**
     * Edit Player Profile
     *
     */
    public function playerProfile()
    {
        $states = State::all();
        return view('player.pages.editProfile', compact('states'));
    }

    /**
     * Update Player Profile
     *
     * @param \App\Services\PlayerService $profile
     * @param \Illuminate\Http\Request
     *
     * @return Illuminate\Http\Response
     */
    public function updatePlayerProfile(PlayerService $profile, Request $request)
    {
        $profileResponse = $profile->updatePlayerProfile($request);
        $profileResponse == 'updated'
            ? parent::successMessage('Profile Updated Successfully')
            : parent::dangerMessage('Profile does not Updated');
        return redirect()->back();
    }
}
