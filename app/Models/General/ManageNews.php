<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageNews extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading_one',
        'heading_two',
        'content',
    ];
}
