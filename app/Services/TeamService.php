<?php

namespace App\Services;

use App\Models\Team\Team;
use Exception;
use Illuminate\Support\Facades\Auth;
use Image;

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
            $teamImage = '';            
            
            if($request->hasFile('team_profile')) {
                $teamImage = $this->teamProfileWaterMark($request ,$param1=null,  $param2=null);                
            }          
            
            try {
                Team::create([
                    'user_id' => $id,
                    'team_name' => $request->team_name,
                    'division' => $request->division,
                    'state_id' => $request->team_state,
                    'team_city' => $request->team_city,
                    'team_profile'=>$teamImage,
                    'age_group' => $request->age_group
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
            $proImage = '';
            if(empty($request->team_profile)){
                $proImage = $team->team_profile;
                         
            } else {
                if( $request->hasFile( 'team_profile')) { 
                                   
                    $proImage = $this->teamProfileWaterMark($request , $id, $a=1); 
                }               
            }
            
            
            $team->update([
                'team_name' => $request->team_name,
                'division' => $request->division,
                'team_city' => $request->team_city,
                'state_id' => $request->team_state,
                'team_profile'=>$proImage,
                'age_group' => $request->age_group,
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
            Team::find($id)->delete();
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        return 'true';
    }

    public function teamProfileWaterMark($request , $id ,$a)
    {              
        $destinationPath = public_path( 'images/team/teamimages/' );
        $file = $request->team_profile;
        $fileName = time() . '.'.$file->clientExtension();
        if($a == 1){
           $teamresult = Team::find($id);
            if (file_exists(public_path('images/team/teamImages/' . $teamresult->team_profile))) {
                unlink(public_path('images/team/teamImages/' . $teamresult->team_profile));
            }
        }
        $image_resize=Image::make($file->getRealPath());
        $image_resize->resizeCanvas(300, 200);
        $watermark=Image::make(public_path('images/team/logo.png'));
        $watermark->resize(50, 50);
        $image_resize->insert($watermark, 'bottom-right');
        $file->move( $destinationPath, $fileName );
        $image_resize->save(public_path('images/team/teamimages/' . $fileName));
        return $fileName;

    }
}
