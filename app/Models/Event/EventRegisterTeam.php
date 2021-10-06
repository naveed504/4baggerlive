<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team\Team;
use App\Models\Event\Event;
use App\Models\Payments\Payment;
use App\Models\User;
use App\Models\Payments\RefundPayment;

class EventRegisterTeam extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'team_id',
        'user_id',
        'payment_status',
        'payments_id',
        'age_group_id'
    ];
//Naveed
    public function teams()
    {
        return $this->belongsTo(Team::class,'team_id');
    }

    public function payments()
    {
        return $this->belongsTo(Payment::class, 'payments_id');
    }

    public function events()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function checkRefundpayments()
    {
        return $this->hasMany(RefundPayment::class);
    }

    public function scopeFetchRelations($query)
    {
        return $query->with('teams')->with('payments')->with('events')->with('users')->with('checkRefundpayments');
    }


}
