<?php

namespace App\Models\Player\profile;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerPitchModel extends Model
{
    use HasFactory;

    protected $table    = 'player_pitch';

    protected $fillable = [
        'games_played',
        'games_started',
        'complete_games',
        'shut_out',
        'innings_pitched',
        'hits',
        'runs',
        'earned_runs',
        'home_runs',
        'base_on_balls',
        'strike_out',
        'user_id'
    ];

    public function player()
    {
        return $this->belongsTo(User::class);
    }
}
