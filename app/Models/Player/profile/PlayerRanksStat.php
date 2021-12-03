<?php

namespace App\Models\Player\profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PlayerRanksStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'player_participate_in_event',
        'score',
        'showcase_report'
    ];

    public function playerranks()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
