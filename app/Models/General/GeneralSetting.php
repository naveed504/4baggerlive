<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    protected $fillable = [
            'city',
            'street',
            'primary_email',
            'secondary_email',
            'primary_phoneno',
            'secondary_phoneno',
            'facebook',
            'twitter',
            'instagram',
            'google',
            'mission_title',
            'mission_bgimg',
            'mission_bgimgtitle',
            'mission_statment',
            'mission_bgimgcontent',
    ];
}
