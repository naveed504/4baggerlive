<?php

namespace App\Http\Controllers\admin\player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PlayerService;
use App\Models\Player\profile\PlayerBatStat;
class PlayerBatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request , PlayerService $batstats)
    {
        $results = $batstats->savePlayerBatStats($request);
        if($results == "savestats") {
            parent::successMessage("Player Bat Stats Save Successfully");
            return redirect()->back();
        } else {
            parent::dangerMessage("Player Bat Stats does not save , Please Try Again");
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
        $result = PlayerBatStat::with('player')->find($id);
        $value = 1;
       
        return view('admin.pages.player.editplayerstats', compact('result', 'value'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,  PlayerService $batstats)
    {
        $results = $batstats->updatePlayerBatStats($request ,$id);
        if($results == "statupdated") {
            parent::successMessage("Player Bat Stats Updated Successfully");
            return redirect()->back();
        } else {
            parent::dangerMessage("Player Bat Stats does not Updated , Please Try Again");
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
        $result = PlayerBatStat::find($id);
        $result->delete();
        parent::successMessage("Player Bat Stat Deleted Successfully");
        return redirect()->back();

    }
}
