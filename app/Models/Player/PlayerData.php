<?php

namespace App\Models\Player;

use App\Models\State;
use App\Models\Team\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'team_id',
        'date_of_birth',
        'p_city',
        'state_id',
        'zip_code',
        'player_height',
        'parents_f_name',
        'parents_l_name',
        'parents_cell_number',
        'parents_email',
        'graduation_year',
        'player_weight',
        'school_name',
        'college_commitment',
        'player_throw',
        'player_bat',
        'primary_position',
        'secondary_position',
        'player_file',
        'player_facebook',
        'player_twitter',
        'player_instagram',
        'player_video',        
        'mlb_draft',
        'mlb_debuted',
        'last_team_played',
        'national_ranking',
        'state_ranking',
        'best_grade',
        'profile_content'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
