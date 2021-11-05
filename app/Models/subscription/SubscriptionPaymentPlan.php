<?php

namespace App\Models\subscription;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\subscription\SubscriptionPlan;
use App\Models\User;

class SubscriptionPaymentPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscription_plans_id',
        'user_id',
        'subscription_amount',
        'payment_status',
        'transaction_no',
        'expiry_date',
    ];

    public function subscribeusers()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subscriptiondata()
    {
        return $this->belongsTo(SubscriptionPlan::class,'subscription_plans_id');
    }

}
