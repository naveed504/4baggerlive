<?php

namespace App\Models\Payments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event\EventRegisterTeam;
//Naveed
class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'transaction_no',
        'total_amount_paid',
        'event_amount',
        'admin_service_fee',
        'director_amount',
    ];
    public function eventRegTeams()
    {
        return $this->hasMany(EventRegisterTeam::class);
    }
}
