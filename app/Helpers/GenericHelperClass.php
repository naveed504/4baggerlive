<?php

namespace App\Helpers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use File;



class GenericHelperClass
{
    /**
     * @author Tayyeb Hassan
     *
     * This class is a generic form of method which are to be used all around the
     * project, for reusability and static behaviour by laravel facades
     *
     * Write down all the generic methods here in this class for flexibility and reusability
     * Please note this class will be autoloaded via composer and injected to the service
     * providers.
     */

    /**
     * @param string $date
     * @return string calculatedAge (XX Years and XX Months)
     */
    public function calculateAge($date)
    {
        return date_diff(date_create(), date_create($date))
            ->format("%Y Years and %M Months");
    }

    /**
     * Calculate Age In Years
     *
     * @param string $date
     * @return string calculatedAgeYears (XX Years)
     */
    public function calculateAgeYears($date)
    {
        return date_diff(date_create(), date_create($date))
            ->format("%Y Years");
    }

    /**
     * Apply Group By Season to Player Field Stats
     *
     * @param \App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function fieldGroupBySeason(User $player)
    {
        return $player->playerField()->select(
            DB::raw("SUM(assists) as assists"),
            DB::raw("SUM(catcher_interference) as catcher_interference"),
            DB::raw("SUM(double_plays) as double_plays"),
            DB::raw("AVG(fielding_percentage) as fielding_percentage"),
            DB::raw("SUM(innings) as innings"),
            DB::raw("SUM(passed_ball) as passed_ball"),
            DB::raw("SUM(put_out) as put_out"),
            DB::raw("SUM(errors) as errors"),
            DB::raw("SUM(total_chances) as total_chances"),
            DB::raw("SUM(triple_play) as triple_play"),
            DB::raw("YEAR(created_at) as created_at"),
            DB::raw("COUNT(*) as total_matches"),
        )->groupByRaw("YEAR(created_at)")->get();
    }

    /**
     * Apply Group By Season to Player Pitch Stats
     *
     * @param \App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function pitchGroupBySeason(User $player)
    {
        return $player->playerPitch()->select(
            DB::raw("COUNT(*) as total_matches"),
            DB::raw("SUM(games_started) as games_started"),
            DB::raw("SUM(complete_games) as complete_games"),
            DB::raw("SUM(shut_out) as shut_out"),
            DB::raw("SUM(innings_pitched) as innings_pitched"),
            DB::raw("SUM(hits) as hits"),
            DB::raw("SUM(runs) as runs"),
            DB::raw("SUM(earned_runs) as earned_runs"),
            DB::raw("SUM(home_runs) as home_runs"),
            DB::raw("SUM(base_on_balls) as base_on_balls"),
            DB::raw("SUM(strike_out) as strike_out"),
            DB::raw("YEAR(created_at) as created_at"),
        )->groupByRaw("YEAR(created_at)")->get();
    }

    /**
     * Apply Group By Season to Player Bat Stats
     *
     * @param \App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function batGroupBySeason(User $player)
    {
        return $player->playerBat()->select(
            DB::raw("count(*) as total_matches"),
            DB::raw("SUM(innings) as innings"),
            DB::raw("SUM(single) as single"),
            DB::raw("SUM(doubles) as doubles"),
            DB::raw("SUM(triple) as triple"),
            DB::raw("SUM(at_bat) as at_bat"),
            DB::raw("AVG(at_bats_per_homerun) as at_bats_per_homerun"),
            DB::raw("AVG(batting_avg) as batting_avg"),
            DB::raw("SUM(base_on_balls) as base_on_balls"),
            DB::raw("AVG(walk_to_strikeout_ratio) as walk_to_strikeout_ratio"),
            DB::raw("SUM(base_runs) as base_runs"),
            DB::raw("AVG(gross_production_avg) as gross_production_avg"),
            DB::raw("SUM(grand_slam) as grand_slam"),
            DB::raw("SUM(hit) as hit"),
            DB::raw("SUM(hit_by_pitch) as hit_by_pitch"),
            DB::raw("SUM(home_runs) as home_runs"),
            DB::raw("AVG(home_runs_per_hit) as home_runs_per_hit"),
            DB::raw("SUM(strikeout) as strikeout"),
            DB::raw("SUM(left_on_base) as left_on_base"),
            DB::raw("AVG(on_base_percentage) as on_base_percentage"),
            DB::raw("SUM(runs_scored) as runs_scored"),
            DB::raw("SUM(runs_created) as runs_created"),
            DB::raw("SUM(runs_produced) as runs_produced"),
            DB::raw("SUM(runs_batted_in) as runs_batted_in"),
            DB::raw("AVG(total_avg) as total_avg"),
            DB::raw("SUM(total_bases) as total_bases"),
            DB::raw("YEAR(created_at) as created_at")
        )->groupByRaw("YEAR(created_at)")->get();
    }

    /**
     * encrypt user bank details step 1 
     * @param string $key
     */
    public function encryptUserBankDetails($key)
    {
        $encryptedKey = base64_encode(
            strrev(
                base64_encode(
                    strrev($key)
                )
            )
        );
        return $this->Encipher($encryptedKey, 4);
    }

    /**
     * encrypt user bank details step 2
     * @param int $key 
     * @param string  $input  
     */
    public function Encipher($input, $key)
    {
        $output = "";
        $inputArr = str_split($input);
        foreach ($inputArr as $ch) :
            $output .= $this->Cipher($ch, $key);
        endforeach;
        return $output;
    }

     /**
     * encrypt user bank details step 3
     * @param int $key 
     * @param string $ch  
     */
    public function Cipher($ch, $key)
    {
        if (!ctype_alpha($ch)) :
            return $ch;
        endif;
        $offset = ord(ctype_upper($ch) ? 'A' : 'a');
        return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
    }

    /**
     * decrypt user bank details step 1
     * @param string $key 
     */
    public function decryptUserBankDetails($key)
    {
        $key = $this->Decipher($key, 4);
        $decryptedKey = strrev(
            base64_decode(
                strrev(
                    base64_decode($key)
                )
            )
        );
        return $decryptedKey;
    }

     /**
     * decrypt user bank details step 2
     * @param int $key 
     * @param string $input 
     *  
     */
    public function Decipher($input, $key)
    {
        return $this->Encipher($input, 26 - $key);
    }

    /**
     * Insert Image 
     * @param  
     * @param string $input 
     *  
     */
    public function saveImage($image)
    {
       if(empty($image)){
            $profilePhoto =  '';
        } else{            
            $destinationPath = public_path('admin/allimages/');
            $fileName = time().'.'.$image->clientExtension();
            $image->move($destinationPath, $fileName);
            $profilePhoto = $fileName;
        }  
        
        return $profilePhoto;
    }
     
    public function updateImage($image ,$dbrecord)
    {        
        
        if(empty($image)){
            $profilePhoto = $dbrecord;
        } else{                     
            $imagePath = public_path('admin/allimages/'.$dbrecord);
            if(File::exists($imagePath)){
                File::delete($imagePath);
            }
            $destinationPath = public_path('admin/allimages/');
            $file = $image;
            $fileName = time().'.'.$file->clientExtension();
            $file->move($destinationPath, $fileName);
            $profilePhoto = $fileName;
        }  

        return $profilePhoto;
         
    }

    

    
}
 