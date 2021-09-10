<?php

namespace App\Http\Controllers\player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team\Team;
use App\Models\User;
use App\Services\PlayerService;
use App\Models\Player\PlayerData;

class HomeController extends Controller
{
    /**
     * Return player profile page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('player.pages.profile');
    }

    /**
     * Return all teams for player
     *
     * @return \Illuminate\Http\Response
     */
    public function allTeams()
    {
        $allteams = Team::with('user')->get();
        return view('player.pages.allteams', compact('allteams'));
    }

    /**
     * View Single Team
     *
     * @param \App\Models\Team\Team::id
     * @return \Illuminate\Http\Response
     */
    public function viewTeam($id)
    {
        $team = Team::find($id);
        return view('player.pages.view_single_team', compact('team'));
    }

    /**
     * View Player Team
     *
     * @return \Illuminate\Http\Response
     */
    public function myTeam()
    {
        $userid = Auth()->user()->id;
        $myTeams = Team::with('user')->where('user_id', $userid)->get();
        return view('player.pages.myteam', compact('myTeams'));
    }

    /**
     * Request to add into a Team
     *
     * @param \App\Services\PlayerService
     * @param \App\Models\Team\Team::id
     *
     * @return \Illuminate\Http\Response
     */
    public function playerRequest(PlayerService $player, $id)
    {
        $userid = Auth()->user()->id;
        $requestResponse = $player->playerRequestForTeam($userid, $id);
        $requestResponse == 'true'
            ? parent::successMessage('Request Send Successfully')
            : parent::dangerMessage('Request does not send. Please try again');

        return redirect()->back();
    }
}
