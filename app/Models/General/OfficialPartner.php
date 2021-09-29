<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficialPartner extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'detail'
    ];
}
