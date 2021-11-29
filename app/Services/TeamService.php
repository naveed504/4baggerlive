<?php

namespace App\Services;

use App\Models\Team\Team;
use Exception;
use Illuminate\Support\Facades\Auth;
use Image;
use Helpers;

class TeamService
{
    /**
     * insert Team to database
     *
     * @param Illuminate\Support\Collection $request
     * @return string
     */
    public function createTeam($id, $request)
    {

        if (!empty($request->all())) {
            $teamlogo =Helpers::saveteamProfileWaterMark($request->team_profile);
            try {
                Team::create([
                    'user_id' => $id,
                    'event_id' => $request->event,
                    'team_name' => $request->team_name,
                    'division' => $request->division,
                    'state_id' => $request->team_state,
                    'team_city' => $request->team_city,
                    'team_profile'=>$teamlogo,
                    'age_group_id' => $request->age_group
                ]);
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        }
        return 'true';
    }

    /**
     * Update Team
     *
     * @param String $id
     * @param Illuminate\Support\Collection $request
     * @return string
     */
    public function updateTeam($id, $request)
    {
        $team = Team::find($id);
        try {

           $dbteamlogo=  $team->team_profile;
          
           $updateteamlogo =Helpers::updateteamProfileWaterMark($dbteamlogo,$request->update_team_profile);
            

            $team->update([
                'team_name' => $request->team_name,
                'division' => $request->division,
                'team_city' => $request->team_city,
                'state_id' => $request->team_state,
                'team_profile'=>$updateteamlogo,
                'age_group_id' => $request->age_group,
                'active' => Auth::user()->type == 1 ? $request->active : $team->active
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        return true;
    }

    /**
     * Delete Team from database
     *
     * @param String $id
     * @return string
     */
    public function deleteTeam($id)
    {
        try {
            Team::find($id)->user()->delete();
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        return 'true';
    }

    
}
