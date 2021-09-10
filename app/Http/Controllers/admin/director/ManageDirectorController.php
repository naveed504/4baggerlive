<?php

namespace App\Http\Controllers\admin\director;

use App\Http\Controllers\Controller;
use App\Models\State;
use App\Models\User;
use App\Services\DirectorService;
use Exception;
use Illuminate\Http\Request;

class ManageDirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = User::where('type', 2)->get();
        return view('admin.pages.directors.view', compact('directors'));
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
        $states = State::all();
        $director = User::find($id);
        // assigning state names to state Ids
        $director->director->field_state = json_encode(
            State::select('state_name')
                ->whereIn('id', json_decode($director->director->field_state))
                ->get()->map(function ($state) {
                    return $state->state_name;
                })
        );
        return view('admin.pages.directors.show', compact('director', 'states'));
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
        $director = User::find($id);
        return view('admin.pages.directors.edit', compact('director', 'states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DirectorService $director, $id)
    {
        $director->updateDirector($id, $request)
            ? parent::successMessage("Director Updated Successfully")
            : parent::dangerMessage("Oops we have encountered an error. Please try again");

        return redirect()->route('director.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DirectorService $director, $id)
    {

        $director->deleteDirector($id)
            ? parent::successMessage('Director Deleted Successfully')
            : parent::dangerMessage('Oops! We have encountered an error. Please try again later');

        return redirect()->back();
    }

    public function unApprovedDirectors()
    {
        $directors = User::where('type', 2)->where('status', 0)->get();
        return view('admin.pages.directors.approve', compact('directors'));
    }

    public function approveDirectors(Request $request)
    {
        try {
            User::find($request->id)->update([
                'status' => $request->approved
            ]);
            toastr()->success('Director Approved Successfully');
            $response = json_encode(array('response' => 'success'));
        } catch (Exception $e) {
            toastr()->error('Cannot Approve Director, Please Try Again');
            $response = json_encode(array('response' => 'error'));
        }

        return $response;
    }
}
