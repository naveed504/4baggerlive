<?php

namespace App\Models\Player\profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class PlayerFieldingStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'season',
        'matches',
        'innings',
        'a',
        'ci',
        'db',
        'fp',
        'pb',
        'po',
        'e',
        'tc',
        'tp'
    ];

    public function player()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
