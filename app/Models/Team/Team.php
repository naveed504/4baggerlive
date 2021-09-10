<?php

namespace App\Models\Team;

use App\Models\Event\Event;
use App\Models\Player\PlayerData;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Request;
use App\Models\State;
use App\Models\Payments\Payment;
use App\Models\Payments\PaymentPayout;
use App\Models\Payments\RefundPayment;
use App\Models\Event\EventRegisterTeam;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'team_name',
        'team_city',
        'state_id',
        'age_group',
        'division',
        'active',
    ];
//Naveed
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class,'event_id');
    }

    public function request()
    {
        return $this->hasMany(Request::class);
    }

    public function player()
    {
        return $this->hasMany(PlayerData::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }


    public function checkeventRegTeam()
    {
        return $this->hasMany(EventRegisterTeam::class);
    }


}
