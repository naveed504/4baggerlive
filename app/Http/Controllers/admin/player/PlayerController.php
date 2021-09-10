<?php

namespace App\Http\Controllers\admin\player;

use App\Http\Controllers\Controller;
use App\Models\Player\PlayerData;
use App\Models\User;
use Illuminate\Http\Request;

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
}
