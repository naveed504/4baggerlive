<?php

namespace App\Models\Player\profile;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerBatModel extends Model
{
    use HasFactory;

    protected $fillable =  [
        'user_id',
        'innings',
        'single',
        'doubles',
        'triple',
        'at_bat',
        'at_bats_per_homerun',
        'batting_avg',
        'base_on_balls',
        'walk_to_strikeout_ratio',
        'base_runs',
        'gross_production_avg',
        'grand_slam',
        'hit',
        'hit_by_pitch',
        'home_runs',
        'home_runs_per_hit',
        'strikeout',
        'left_on_base',
        'on_base_percentage',
        'runs_scored',
        'runs_created',
        'runs_produced',
        'runs_batted_in',
        'total_avg',
        'total_bases',
    ];

    public function player()
    {
        return $this->belongsTo(User::class);
    }
}
