<?php

namespace App\Models\Player\profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerFieldModel extends Model
{
    use HasFactory;

    protected $table    = 'player_field';

    protected $fillable = [
        'assists',
        'catcher_interference',
        'double_plays',
        'fielding_percentage',
        'innings',
        'passed_ball',
        'put_out',
        'errors',
        'total_chances',
        'triple_play',
        'user_id'
    ];


    public function player()
    {
        return $this->belongsTo(User::class);
    }
}
