<?php

namespace App\Services;

use App\Models\Request;
use Exception;
use Helpers;
use App\Models\Player\PlayerData;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Player\profile\PlayerPitchStat;
use App\Models\Player\profile\PlayerBatStat;
use App\Models\Player\profile\PlayerFieldingStat;




class PlayerService
{
    protected $parent;

    public function __construct(Controller $parent)
    {
        $this->parent = $parent;
    }

    /**
     * @param int $playerid
     * @param int $teamid
     * @return response
     */
    public function playerRequestForTeam($data)
    {


        $resultRequest = Request::where('user_id', $data['player_id'])->where('team_id', $data['team_id'])->count();
        if ($resultRequest > 0) {
            return redirect()->back();
        }

        try {
            Request::create([
                'user_id' => $data['player_id'],
                'team_id' => $data['team_id']
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return 'true';
    }

    /**
     * update profile of player
     */
    public function updatePlayerProfile($data)
    {

        if ($data['password'] != $data['password_confirmation']) {
            $this->parent->dangerPasswordMessage(1);
            return redirect()->back();
        }
        if ($data['password']) {
            Validator::make($data, [ // <---
                'password' => 'required_with:password_confirmation|same:password_confirmation|string|min:8',
                'password_confirmation' => 'min:8',
            ]);
        }

        if (Auth::user()->type == 1) {
            $userrecord = PlayerData::find($data['player_id']);
            $dbRecord_player_video = $userrecord->player_video;
            $dbRecord = $userrecord->player_file;
        } elseif (Auth::user()->type == 4) {
            $dbRecord_player_video = Auth::user()->player->player_video;
            $dbRecord = Auth::user()->player->player_file;
        }

        if (Auth::user()->type == 1) {
            $imgpath = public_path('frontend/player/');
            $file_name = Helpers::updateImage($data['fileupload'] ?? null, $dbRecord, $imgpath);
            $playervideo = Helpers::updateImage($data['player_video'] ?? null, $dbRecord_player_video, $imgpath);
        } elseif (Auth::user()->type == 4) {
            $imgpath = public_path('frontend/player/');
            $file_name = Helpers::updateImage($data['fileupload'] ?? null, $dbRecord, $imgpath);
            $playervideo = Helpers::updateImage($data['player_video'] ?? null, $dbRecord_player_video, $imgpath);
        }



        try {
            if (Auth::user()->type == 1) {
                $playerdata = PlayerData::where('id', $data['player_id'])->first();
            } elseif (Auth::user()->type == 4) {
                $playerdata =  PlayerData::where('user_id', Auth::user()->id)->first();
            }
            $playerdata->update([
                'p_city'                => $data['p_city'],
                'state_id'               => $data['p_state'],
                'zip_code'              => $data['zip_code'],
                'date_of_birth'         => $data['day'] . '-' . $data['month'] . '-' . $data['year'],
                'player_height'         => $data['height'] . '.' . $data['inches'],
                'parents_f_name'        => json_encode($data['parent_firstname']),
                'parents_l_name'        => json_encode($data['parent_lastname']),
                'parents_cell_number'   => json_encode($data['parent_cellno']),
                'parents_email'         => json_encode($data['parent_email']),
                'graduation_year'       => $data['graduation_year'],
                'player_weight'         => $data['weight'],
                'school_name'           => $data['school'],
                'college_commitment'    => $data['college_commit'],
                'player_throw'          => $data['throw'],
                'player_bat'            => $data['bat'],
                'primary_position'      => $data['primary_position'],
                'secondary_position'    => $data['secondary_possition'],
                'player_file'           => $file_name,
                'player_video'          => $playervideo,
                'player_facebook'       => $data['facebook'],
                'player_twitter'        => $data['twitter'],
                'player_instagram'      => $data['instagram'],
                'mlb_draft'             => $data['mlb_draft'] ?? '',
                'mlb_debuted'           => $data['mlb_debuted'] ?? '',
                'last_team_played'      => $data['last_team_played'] ?? '',
                'national_ranking'      => $data['national_ranking'] ?? '',
                'state_ranking'         => $data['state_ranking'] ?? '',
                'best_grade'            => $data['best_grade'] ?? '',
                'profile_content'       => $data['profile_content'] ?? '',

            ]);
            if (Auth::user()->type == 1) {
                $playerdatauser = User::where('id', $data['user_id'])->first();
            } elseif (Auth::user()->type == 4) {
                $playerdatauser =  User::where('id', Auth::user()->id)->first();
            }

            $playerdatauser->update([
                'first_name'           => $data['first_name'],
                'email'                => $data['email'],
                'last_name'            => $data['last_name'],
                'name'                 => $data['first_name'] . ' ' . $data['last_name'],
                'cell_number'          => $data['cell_no'],
                'password'             => $data['password'] ? Hash::make($data['password']) : Auth::user()->password,
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return 'updated';
    }



    public function savePlayerPitchStats($request)
    {
        try {

            PlayerPitchStat::create([
                'user_id'       => $request->playerid,
                'season'        => $request->season,
                'matches'       => $request->matches,
                'innings'       => $request->innings,
                'game_start'    => $request->game_start,
                'game_complete' => $request->game_complete,
                'sho'           => $request->sho,
                'h'             => $request->h,
                'r'             => $request->r,
                'hr'            => $request->hr,
                'er'            => $request->er,
                'bb'            => $request->bb,
                'k'             => $request->k
            ]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return "savestats";
    }


    public function savePlayerBatStats($request)
    {
        try {

            PlayerBatStat::create([
                'user_id'    => $request->playerid,
                'season'     => $request->season,
                'matches'    => $request->matches,
                'innings'    => $request->innings,
                'one_b'      => $request->one_b,
                'two_b'      => $request->two_b,
                'three_b'    => $request->three_b,
                'ab'         => $request->ab,
                'ab_hr'      => $request->ab_hr,
                'ba'         => $request->ba,
                'bb'         => $request->bb,
                'bb_k'       => $request->bb_k,
                'bsr'        => $request->bsr,
                'gpa'        => $request->gpa,
                'gs'         => $request->gs,
                'h'          => $request->h,
                'hbp'        => $request->hbp,
                'hr'         => $request->hr,
                'k'          => $request->k,
                'lob'        => $request->lob,
                'obp'        => $request->obp,
                'r'          => $request->r,
                'rc'         => $request->rc,
                'rp'         => $request->rp,
                'rbi'        => $request->rbi,
                'ta'         => $request->ta,
                'tb'         => $request->tb
            ]);
        } catch (Exception $e) {
            return redirect()->back();
        }
        return "savestats";
    }
    public function updatePlayerBatStats($request , $id) 
    {
       
        $result = PlayerBatStat::find($id);
        try{
            $result->update([
                'user_id'    => $request->playerid,
                'season'     => $request->season,
                'matches'    => $request->matches,
                'innings'    => $request->innings,
                'one_b'      => $request->one_b,
                'two_b'      => $request->two_b,
                'three_b'    => $request->three_b,
                'ab'         => $request->ab,
                'ab_hr'      => $request->ab_hr,
                'ba'         => $request->ba,
                'bb'         => $request->bb,
                'bb_k'       => $request->bb_k,
                'bsr'        => $request->bsr,
                'gpa'        => $request->gpa,
                'gs'         => $request->gs,
                'h'          => $request->h,
                'hbp'        => $request->hbp,
                'hr'         => $request->hr,
                'k'          => $request->k,
                'lob'        => $request->lob,
                'obp'        => $request->obp,
                'r'          => $request->r,
                'rc'         => $request->rc,
                'rp'         => $request->rp,
                'rbi'        => $request->rbi,
                'ta'         => $request->ta,
                'tb'         => $request->tb
    
            ]);

        } catch(Exception $e) {
            return redirect()->back();
        }

        return "statupdated";
        

    }

    public function savePlayerFieldStats($request)
    {
        try {

            PlayerFieldingStat::create([
                'user_id'   => $request->playerid,
                'season'    => $request->season,
                'matches'   => $request->matches,
                'innings'   => $request->innings,
                'a'         => $request->a,
                'ci'        => $request->ci,
                'db'        => $request->db,
                'fp'        => $request->fp,
                'pb'        => $request->pb,
                'po'        => $request->po,
                'e'         => $request->e,
                'tc'        => $request->tc,
                'tp'        => $request->tp,

            ]);
        } catch (Exception $e) {
            return redirect()->back();
        }

        return  "savestats";
    }


    public function updatePlayerFieldStats($request , $id)
    {
      
        $result = PlayerFieldingStat::find($id);

        try {
            $result->update([
                'user_id'   => $request->playerid,
                'season'    => $request->season,
                'matches'   => $request->matches,
                'innings'   => $request->innings,
                'a'         => $request->a,
                'ci'        => $request->ci,
                'db'        => $request->db,
                'fp'        => $request->fp,
                'pb'        => $request->pb,
                'po'        => $request->po,
                'e'         => $request->e,
                'tc'        => $request->tc,
                'tp'        => $request->tp,
            ]);
        } catch(Exception $e) {
          dd($e->getMessage());
        }

        return "statupdated";


    }

    public function updatePlayerPitchStats($request , $id)
    {
        $result =PlayerPitchStat::find($id);
         try {

            $result->update([
                'user_id'       => $request->playerid,
                'season'        => $request->season,
                'matches'       => $request->matches,
                'innings'       => $request->innings,
                'game_start'    => $request->game_start,
                'game_complete' => $request->game_complete,
                'sho'           => $request->sho,
                'h'             => $request->h,
                'r'             => $request->r,
                'hr'            => $request->hr,
                'er'            => $request->er,
                'bb'            => $request->bb,
                'k'             => $request->k
            ]);

         } catch(Exception $e) {
             return redirect()->back();
         }

         return "statupdated";

    }
}
