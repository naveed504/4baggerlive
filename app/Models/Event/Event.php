<?php

namespace App\Models\Event;

use App\Models\State;
use App\Models\AgeGroup;
use App\Models\Team\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payments\Payment;
use App\Models\Payments\PaymentPayout;
use App\Models\Event\EventRegisterTeam;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'event_name',
        'total_matches',
        'start_date',
        'end_date',
        'graduation_restriction',
        'allowed_bats',
        'entry_fee',
        'event_format',
        'event_summary',
        'event_logo',
        'approved',
        'gate_fee',
        'eventclassification',
        'event_city',
        'state_id',
        'event_venue',
        'team_id',
        'age_group_id',
        'event_time',
        'event_category',
    ];

    public function team()
    {
        return $this->hasMany(Team::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
    //naveed
    public function eventRegTeams()
    {
        return $this->hasMany(EventRegisterTeam::class);
    }
    public function agegroup()
    {
        return $this->belongsTo(AgeGroup::class,'age_group_id');
    }


}
