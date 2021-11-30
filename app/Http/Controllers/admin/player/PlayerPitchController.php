<?php

namespace App\Http\Controllers\admin\player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PlayerService;
use JsValidator;
use App\Models\Player\profile\PlayerPitchStat;
use App\Models\Player\profile\PlayerBatStat;
use App\Models\Player\profile\PlayerFieldingStat;
class PlayerPitchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   


     public function createPlayerStats($playerid)
     {
        $pitchstats =PlayerPitchStat::where('user_id', '=', $playerid)->get();
       
        $batstats   =PlayerBatStat::where('user_id', '=', $playerid)->get();
        $fieldstats =PlayerFieldingStat::where('user_id', '=', $playerid)->get();
        return view('admin.pages.player.createstats',compact('playerid','pitchstats','batstats','fieldstats'));
     }
    public function index()
    {
        //
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
    public function store(Request $request, PlayerService $pitchstats)
    {
        $results = $pitchstats->savePlayerPitchStats($request);
        if($results == "savestats") {
            parent::successMessage("Player Pitch Stats Save Successfully");
            return redirect()->back();
        } else {
            parent::dangerMessage("Player Stats does not save , Please Try Again");
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = PlayerPitchStat::with('player')->find($id);
        $value = 2;
       
        return view('admin.pages.player.editplayerstats', compact('result', 'value'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id , PlayerService $pitchstats)
    {
        $results = $pitchstats->updatePlayerPitchStats($request ,$id);
        if($results == "statupdated") {
            parent::successMessage("Player Pitch Stats Updated Successfully");
            return redirect()->back();
        } else {
            parent::dangerMessage("Player Pitch Stats does not Updated , Please Try Again");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = PlayerPitchStat::find($id);
        $result->delete();
        parent::successMessage("Player Pitch Stat Deleted Successfully");
        return redirect()->back();
    }
}
