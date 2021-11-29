<?php

namespace App\Http\Controllers\admin\player;

use App\Http\Controllers\Controller;
use App\Models\Player\PlayerData;
use App\Models\User;
use App\Models\State;
use Illuminate\Http\Request;
use App\Services\PlayerService;
use File;
class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = User::where('type', 4)->get();
        return view('admin.pages.player.index', compact('players'));
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
        $player = User::find($id);
        return view('admin.pages.player.profile', compact('player'));
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
        $playerTableData = PlayerData::where('user_id', $id)->first();
        $userTableData = User::find($id);
        return view('admin.pages.player.editProfile', compact('states', 'playerTableData', 'userTableData'));
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $playerDelete = PlayerData::where('user_id', $id)->first();
        $imgpath= public_path('frontend/player/'.$playerDelete->player_file);
        $vediopath= public_path('frontend/player/'.$playerDelete->player_video);
        if(File::exists($imgpath)) {
            File::delete($imgpath);
        }
        if(File::exists($vediopath)) {
            File::delete($vediopath);
        }
        $playerDelete = $playerDelete->delete();
        $userDelete = User::find($id)->delete();
        if($playerDelete == 1 AND $userDelete == 1){
            $responce = 'deleted';
        }
        $responce == 'deleted'
        ? parent::successMessage('Player Deleted Successfully')
        : parent::dangerMessage('Player does not Deleted');
        return redirect()->back();
    }

    /**
     * Search a player
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function searchPlayer(Request $request)
    {
        $players = User::where('type', 4)->where(function ($query) use ($request) {
            $query->where('email', 'LIKE', "%$request->search%");
            $query->orWhere('id', $request->search);
            $query->orWhere('first_name', 'LIKE', "%$request->search%");
            $query->orWhere('last_name', 'LIKE', "%$request->search%");
        })->get();
        return view('admin.pages.player.index', compact('players'));
    }

    public function editplayerprofile(Request $request, PlayerService $playerserrvicedata)
    {
        $responce = $playerserrvicedata->updatePlayerProfile($request->all());
        $responce == 'updated'
            ? parent::successMessage('Profile Updated Successfully')
            : parent::dangerMessage('Profile does not Updated');
        return redirect()->back();
    }

    


    
}
