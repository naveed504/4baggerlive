<?php

namespace App\Services;

use App\Models\Event\Event as EventModel;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Models\CheckAgeGroupStatus;
use App\Models\Team\Team;

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


            $query = EventModel::create([
                'user_id' => $this->user,
                'event_name' => $request->event_name,
                'total_matches' => $request->total_matches,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'graduation_restriction' => implode(",", $request->grad_restriction),
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
            $lastInsertedId = $query->id;

            foreach($request->age_group as $key => $val)
            {
                CheckAgeGroupStatus::create([
                    'age_group_id' => $request->age_group[$key],
                    'event_id' => $lastInsertedId,
                ]);
            }

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
                'graduation_restriction' => implode(",", $request->grad_restriction),
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

            $ageGroups = CheckAgeGroupStatus::where('event_id', $id)->get();
            $reqAgeGroup = $request->age_group;
            $exitsIds = [];
            foreach ($ageGroups as $key => $value)
            {
                if(in_array($value->age_group_id, $reqAgeGroup))
                {
                    $exitsIds[] = $value->age_group_id;
                } else {
                    CheckAgeGroupStatus::where('id', '=', $value->id)->delete();
                }
            }

            foreach($request->age_group as $val)
            {
                if(!in_array($val, $exitsIds))
                {
                    CheckAgeGroupStatus::create([
                        'age_group_id' => $val,
                        'event_id' => $id,
                    ]);
                }
            }

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
            CheckAgeGroupStatus::where('event_id', $id)->delete();
            Team::where('event_id', $id)->delete();
            EventModel::find($id)->delete();
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return true;
    }
}
