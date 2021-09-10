<?php

namespace App\Models\subscription;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    use HasFactory;
    
    protected $fillable = [ 
        'plan_name',
        'plan_amount',
        'plan_type',
        'plan_des',
    ];
}
