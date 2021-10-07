<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventTimeSchedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_schedule_time'
    ];
}
