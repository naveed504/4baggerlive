<?php

namespace App\Models\Player\profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PlayerPitchStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'season',
        'matches',
        'innings',
        'game_start',
        'game_complete',
        'sho',
        'h',
        'r',
        'hr',
        'er',
        'bb',
        'k'
    ];

    public function player()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
