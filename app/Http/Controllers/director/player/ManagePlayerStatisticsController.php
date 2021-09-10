<?php

namespace App\Http\Controllers\director\player;

use App\Http\Controllers\Controller;
use App\Models\Player\profile\PlayerBatModel;
use App\Models\Player\profile\PlayerFieldModel;
use App\Models\Player\profile\PlayerPitchModel;
use App\Models\Player\profile\PlayerRanksModel;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class ManagePlayerStatisticsController extends Controller
{
    /**
     * Show Player Statistics Form
     *
     * @param \App|Models\User:id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $player = User::find($id);
        return view('director.pages.player.addstatistics', compact('player'));
    }

    /**
     * Store Player Ranking
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function storeRanking(Request $request)
    {
        try {
            PlayerRanksModel::create($request->all());
            parent::successMessage('Player Statistics Added');
        } catch (Exception $e) {
            parent::dangerMessage($e->getMessage());
        }

        return redirect()->route('show.player', $request->user_id);
    }

    /**
     * Store Player Pitch Stats
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function storePitchStats(Request $request)
    {
        try {
            PlayerPitchModel::create($request->all());
            parent::successMessage('Player Statistics Added');
        } catch (Exception $e) {
            parent::dangerMessage($e->getMessage());
        }

        return redirect()->route('show.player', $request->user_id);
    }

    /**
     * Store Player Bat Stats
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function storeBatStats(Request $request)
    {
        try {
            PlayerBatModel::create($request->all());
            parent::successMessage('Player Statistics Added');
        } catch (Exception $e) {
            parent::dangerMessage($e->getMessage());
        }

        return redirect()->route('show.player', $request->user_id);
    }

    /**
     * Store Player Field Stats
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function storeFieldStats(Request $request)
    {
        try {
            PlayerFieldModel::create($request->all());
            parent::successMessage('Player Statistics Added');
        } catch (Exception $e) {
            parent::dangerMessage($e->getMessage());
        }

        return redirect()->route('show.player', $request->user_id);
    }
}
