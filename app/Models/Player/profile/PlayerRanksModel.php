<?php

namespace App\Models\Player\profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerRanksModel extends Model
{
    use HasFactory;

    protected $table    = 'player_ranks';

    protected $fillable = [
        'mlb_draft',
        'mlb_debuted',
        'commitment',
        'best_pg_grade',
        'over_all',
        'mif',
        'team_last_played',
        'user_id'
    ];
}
