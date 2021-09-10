<?php

namespace App\Models\Payments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event\EventRegisterTeam;

class RefundPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_register_team_id',
        'refund_transaction_no',
        'refund_amount',

    ];

    public function refundpayments()
    {
        return $this->belongsTo(EventRegisterTeam::class);
    }
}
