<?php

namespace App\Models\Payments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event\Event;
use App\Models\User;
use App\Modesl\Team\Team;

use App\Models\Payments\Payment;

//naveed
class PaymentPayout extends Model
{
    use HasFactory;
    protected $fillable =[
        'payments_id',
        'event_id',
        'director_amount',
        'admin_amount',
        'transaction_no',
        'total_amount',
        'user_id',
    ];


    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function payments()
    {
        return $this->belongsTo(Payment::class);
    }


}
