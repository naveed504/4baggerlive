<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentContentSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'detail'
    ];
}

