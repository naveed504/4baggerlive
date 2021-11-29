<?php

namespace App\Http\Controllers\director\Team;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\AgeGroup;
use App\Models\CheckAgeGroupStatus;
use App\Models\Team\Team;
use App\Models\Event\Event;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Services\TeamService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManageTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('director.pages.team.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        $ageGroups = AgeGroup::all();
        $directorEventState = Event::with('state')->where('user_id', Auth::user()->id)->where('approved',1)->get();

        return view('director.pages.team.create', compact('states', 'ageGroups', 'directorEventState'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TeamService $team)
    {
      

        if (!empty($request->terms_agreement) && !empty($request->site_agreement)) {
            if ($request->password != $request->password_confirmation) {
                parent::dangerMessage('Passwords do not match');
                return redirect()->back();
            }

           try{
                $checkstatus =  CheckAgeGroupStatus::where('age_group_id', '=', $request->age_group)->where('event_id', '=', $request->event)->first('status');
                if ($checkstatus == null or $checkstatus->status == 'close') {
                    parent::dangerMessage('Age-Group does not exist Please select another ');
                    parent::dangerMessage('Age-Group OR Tournament is Closed Now');
                    return redirect()->back();
                }
                $checkresult = User::where('email','=',$request->email)->first();
                if($checkresult !== null) {
                   $matchpassword= Hash::check($request->password , $checkresult->password);
                   if(!$matchpassword){
                    parent::dangerMessage('Your Password does not match with old password');
                    parent::dangerMessage('This Email already exist please use the same password');
                    return redirect()->back();
                   }
                }

                if($checkresult == null) {
                    $checkresult= User::create([
                        'director_id' => Auth::user()->id,
                        'name' => $request->name,
                        'email'  => $request->email,
                        'password' => Hash::make($request->password),
                        'type' => 3,
                        'cell_number' => $request->cell_no
                    ]);
                }
                // Team Service
                $created = $team->createTeam($checkresult->id, $request);
                if ($created != 'true') {
                    throw new Exception("Oops we have encountered a problem. Please try again");
                }
            } catch (Exception $e) {
                dd($e->getMessage());
            }
            parent::successMessage('Team Created Successfully');
        } else {
            parent::dangerMessage('Agree to the terms and services');
        }
        return redirect()->route('team.index');
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
        return view('director.pages.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ageGroups = AgeGroup::all();
        $states = State::all();
        $team = Team::find($id);
        $directorEventState = Event::with('state')->where('user_id', Auth::user()->id)->get();
        return view('director.pages.team.edit', compact('ageGroups', 'team', 'states', 'directorEventState'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamService $team, $id)
    {
        if (!empty($request->terms_agreement) && !empty($request->site_agreement)) {
            if ($request->password != $request->password_confirmation) {
                parent::dangerMessage('Passwords do not match');
                return redirect()->back();
            }

            try {
                $checkstatus =  CheckAgeGroupStatus::where('age_group_id', '=', $request->age_group)->where('event_id', '=', $request->event)->first('status');
                if ($checkstatus == null or $checkstatus->status == 'close') {
                    parent::dangerMessage('Age-Group does not exist Please select another ');
                    parent::dangerMessage('Age-Group OR Tournament is Closed Now');
                    return redirect()->back();
                }
                $user = User::where('id', $request->coach_id)->first();
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'cell_number' => $request->cell_no,
                    'password' => !empty($request->password) ? Hash::make($request->password) : $user->password,
                ]);
                // Team Service
                $updated = $team->updateTeam($id, $request);
                if ($updated != 'true') {
                    throw new Exception("Oops we have encountered a problem. Please try again");
                }
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        } else {
            parent::dangerMessage("You forgot to agree to the FourBagger's terms and conditions");
            return redirect()->back();
        }
        parent::successMessage('Data Updated Successfully');
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamService $team, $id)
    {
        $deleteresult = $team->deleteTeam($id) == 'true' ;
        if($deleteresult) {
            parent::successMessage('Team Deleted Successfully');
        } else {
            parent::dangerMessage('Team added into event');
            parent::dangerMessage('You cannot delete this team');
        }
           
        return redirect()->back();
    }
}
