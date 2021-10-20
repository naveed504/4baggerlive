<?php

namespace App\Http\Controllers\admin\team;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\Team\Team;
use App\Services\TeamService;
use Illuminate\Http\Request;
use App\Models\Event\EventRegisterTeam;
use App\Models\Event\Event;
use App\Models\User;
use DataTables;

class AdminTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $teams = Team::all();
        return view('admin.pages.teams.index',compact('teams'));
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
        
      

        $teamevents = EventRegisterTeam::where('team_id',$id)->fetchRelations()->first();
        $team = Team::find($id)->first();
        if(empty($teamevents)){
            parent::dangerMessage("Team does not added any event");
            return redirect()->back();
        } elseif($teamevents->payment_status == 0){
            parent::dangerMessage("Team does not Pay payment for event");
            return redirect()->back();
        }       
    
        return view('admin.pages.teams.show', compact('team', 'teamevents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        $states = State::all();
        return view('admin.pages.teams.edit', compact('team', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\Services\TeamService
     * @return \Illuminate\Http\Response
     */
    public function update(TeamService $team, Request $request, $id)
    {
        $team->updateTeam($id, $request)
            ? parent::successMessage("Team Updated Successfully")
            : parent::dangerMessage("Oops! We have encountered an issue, please try again");
        return redirect()->route('adminteams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        parent::successMessage("Team deleted successfully");
        return redirect()->back();

    }
    public function getallTeams(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*');
            
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        
       
        return view('test.index');
    }
}
