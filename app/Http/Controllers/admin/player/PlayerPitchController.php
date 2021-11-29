<?php

namespace App\Http\Controllers\admin\player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PlayerService;

class PlayerPitchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function createPlayerStats($playerid)
     {
        return view('admin.pages.player.createstats',compact('playerid'));
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
