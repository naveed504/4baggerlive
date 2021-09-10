<?php

namespace App\Models;

use App\Models\Director\DirectorData;
use App\Models\Event\Event;
use App\Models\Player\PlayerData;
use App\Models\Team\Team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function directors()
    {
        return $this->hasMany(DirectorData::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function players()
    {
        return $this->hasMany(PlayerData::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
