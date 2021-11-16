<?php

namespace App\Services;

use App\Models\Request;
use Exception;
use Helpers;
use App\Models\Player\PlayerData;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PlayerService
{

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


        if ($data['password']) {
            $data->validate([
                'password' => 'required_with:password_confirmation|same:password_confirmation|string|min:8',
                'password_confirmation' => 'min:8',
            ]);
        }

        if(Auth::user()->type == 1) {
            $userrecord= PlayerData::find($data['player_id']);
            $dbRecord_player_video = $userrecord->player_video;
            $dbRecord = $userrecord->player_file;

        } elseif(Auth::user()->type == 4) {
            $dbRecord_player_video = Auth::user()->player->player_video;
            $dbRecord = Auth::user()->player->player_file;
        }

        if(Auth::user()->type == 1) {
            $imgpath= public_path('frontend/player/');
            $file_name = Helpers::updateImage($data['fileupload'] ?? null, $dbRecord, $imgpath);
            $playervideo = Helpers::updateImage($data['player_video'] ?? null, $dbRecord_player_video, $imgpath);
        } elseif(Auth::user()->type == 4) {
            $imgpath= public_path('frontend/player/');
            $file_name = Helpers::updateImage($data->fileupload, $dbRecord, $imgpath);
            $playervideo = Helpers::updateImage($data['player_video'], $dbRecord_player_video,$imgpath);
        }



        try {
            if(Auth::user()->type == 1) {
                $playerdata =PlayerData::where('id', $data['player_id'])->first();
            } elseif(Auth::user()->type == 4) {
                $playerdata=  PlayerData::where('user_id', Auth::user()->id)->first();
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

            ]);
            if(Auth::user()->type == 1) {
                $playerdatauser =User::where('id', $data['user_id'])->first();
             } elseif(Auth::user()->type == 4) {
                $playerdatauser=  User::where('id', Auth::user()->id)->first();
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
}
