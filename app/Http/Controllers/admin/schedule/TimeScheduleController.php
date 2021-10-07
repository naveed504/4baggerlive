<?php

namespace App\Http\Controllers\admin\schedule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Event\EventTimeSchedule;
use Exception;

class TimeScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timeschedules = EventTimeSchedule::all();
        return view('admin.pages.schedule.show', compact('timeschedules'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // $currentDateTime = $request->datetimeschedule;
        //  $newDateTime = date('h:i A', strtotime($currentDateTime));
        // dd($newDateTime);
        try{
            EventTimeSchedule::create([
                'event_schedule_time' => $request->event_schedule_time
            ]);
            parent::successMessage('Event Time Schedule added Successfuly');
            return redirect()->back();
        } catch(Exception $e) {
            dd($e->getMessage());

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
