<?php

namespace App\Services;

use App\Models\Event\Event as EventModel;
use Exception;
use Illuminate\Support\Facades\Auth;

class EventService
{
    /**
     * @property string
     */
    protected $user;

    public function __construct()
    {
        $this->user = Auth::user()->id;
    }

    /**
     * insert Event to database
     *
     * @param Illuminate\Support\Collection $request
     * @return string
     */
    public function createEvent($request)
    {
        try {



            if ($request->has('event_logo')) {
                $fileName = time() . '.' . $request->event_logo->extension();
                $request->event_logo->move(public_path('/images/event'), $fileName);
            }


            EventModel::create([
                'user_id' => $this->user,
                'event_name' => $request->event_name,
                'total_matches' => $request->total_matches,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'age_restriction' => $request->age_restriction,
                'graduation_restriction' => $request->grad_restriction,
                'allowed_bats' => json_encode($request->bat_type),
                'age_group_id'    => implode(",", $request->age_group),
                'entry_fee' => $request->entry_fee,
                'event_format' => $request->event_format,
                'event_summary' => $request->event_summary,
                'event_logo' => $fileName ?? "",
                'event_city' => $request->event_city,
                'state_id' => $request->event_state,
                'event_venue' => json_encode($request->event_venue),
                'gate_fee'    => $request->gate_fee,
                'eventclassification'=>$request->eventclassification,
                'event_time'=> json_encode($request->event_time),
                
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return true;
    }

    /**
     * Update Event
     *
     * @param String $id
     * @param Illuminate\Support\Collection $request
     * @return string
     */
    public function updateEvent($id, $request)
    {

        $event = EventModel::find($id);

        if ($request->has('event_logo')) {
            $fileName = time() . '.' . $request->event_logo->extension();
            $request->event_logo->move(public_path('/images/event'), $fileName);
            $image = $event->logo ?? 'test.jpg';
            if (file_exists(public_path('images/event/' . $image))) {
                unlink(public_path('/images/event/' . $image));
            }
        }


        try {
            $event->update([
                'event_name' => $request->event_name,
                'total_matches' => $request->total_matches,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'age_restriction' => $request->age_restriction,
                'graduation_restriction' => $request->grad_restriction,
                'allowed_bats' => json_encode($request->bat_type),
                'age_group_id'    =>implode(",", $request->age_group),
                'entry_fee' => $request->entry_fee,
                'event_format' => $request->event_format,
                'event_summary' => $request->event_summary,
                'event_logo' => $fileName ?? $event->event_logo,
                'event_city' => $request->event_city,
                'state_id' => $request->event_state,
                'event_venue' => json_encode($request->event_venue),
                'gate_fee' => $request->gate_fee,
                'eventclassification'=>$request->eventclassification,
                'approved' => Auth::user()->type == 1 ? (int) $request->status : 0
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return true;
    }

    /**
     * Delete Event
     *
     * @param String $id
     * @return string
     */
    public function deleteEvent($id)
    {
        try {
            EventModel::find($id)->delete();
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return true;
    }
}
