<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team\Team;
use App\Models\Event\Event;

class AgeGroup extends Model
{
    use HasFactory;
    

  public function teams()
  {
      return $this->hasMany(Team::class);
  }

  public function events()
  {
    return $this->hasMany(Team::class);
  }
}
