<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckAgeGroupStatus extends Model
{
    use HasFactory;
    protected $fillable = [
        'age_group_id',
        'event_id',
        'status'
    ];
}
