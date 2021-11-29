<?php

namespace App\Models\Player\profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerBatStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'season',
        'matches',
        'innings',
        'one_b',
        'two_b',
        'three_b',
        'ab',
        'ab_hr',
        'ba',
        'bb',
        'bb_k',
        'bsr',
        'gpa',
        'gs',
        'h',
        'hbp',
        'hr',
        'k',
        'lob',
        'obp',
        'r',
        'rc',
        'rp',
        'rbi',
        'ta',
        'tb'    

    ];

    public function player()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
