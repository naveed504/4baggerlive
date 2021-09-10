<?php

namespace App\Http\Controllers\director\Team;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\Team\Team;
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
        return view('director.pages.team.create', compact('states'));
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

            try {
                $user = User::create([
                    'director_id' => Auth::user()->id,
                    'name' => $request->name,
                    'email'  => $request->email,
                    'password' => Hash::make($request->password),
                    'type' => 3,
                    'cell_number' => $request->cell_no
                ]);

                // Team Service
                $created = $team->createTeam($user->id, $request);
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
        $states = State::all();
        $team = Team::find($id);
        return view('director.pages.team.edit', compact('team', 'states'));
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
        $team->deleteTeam($id) == 'true'
            ? parent::successMessage('Team Deleted Successfully')
            : parent::dangerMessage('Team could not be deleted. Please try again');

        return redirect()->back();
    }
}
