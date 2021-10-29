<?php

namespace App\Models;

use App\Models\Director\DirectorData;
use App\Models\Event\Event;
use App\Models\Player\PlayerData;
use App\Models\Player\profile\PlayerPitchModel;
use App\Models\Player\profile\PlayerFieldModel;
use App\Models\Team\Team;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Request;
use App\Models\Payment;
use App\Models\Player\profile\PlayerBatModel;
use App\Models\Player\profile\PlayerRanksModel;
use App\Models\PaymentPayout;
use App\Models\Event\EventRegisterTeam;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'director_id',
        'name',
        'last_name',
        'email',
        'password',
        'first_name',
        'last_name',
        'cell_number',
        'type',
        'status',
        'profile_photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function director()
    {
        return $this->hasOne(DirectorData::class);
    }

    public function team()
    {
        return $this->hasMany(Team::class);
    }

    public function player()
    {
        return $this->hasOne(PlayerData::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function children()
    {
        return $this->belongsTo(self::class, 'id', 'director_id');
    }

    public function parent()
    {
        return $this->hasMany(self::class, 'director_id', 'id');
    }

    public function request()
    {
        return $this->hasMany(Request::class);
    }

    public function playerpitch()
    {
        return $this->hasMany(PlayerPitchModel::class);
    }

    public function playerfield()
    {
        return $this->hasMany(PlayerFieldModel::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function playerBat()
    {
        return $this->hasMany(PlayerBatModel::class);
    }

    public function playerRanks()
    {
        return $this->hasMany(PlayerRanksModel::class);
    }

    public function getLatestRank()
    {
        return $this->hasOne(PlayerRanksModel::class)->latestOfMany();
    }

    //naveed
    public function eventRegTeams()
    {
        return $this->hasMany(EventRegisterTeam::class);
    }
    
   

}
