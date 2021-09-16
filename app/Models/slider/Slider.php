<?php

namespace App\Models\slider;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_one',
        'title_two',
        'content',
        'cover_photo'
    ];
}
