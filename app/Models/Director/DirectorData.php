<?php

namespace App\Models\Director;

use App\Models\State;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectorData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_name',
        'director_name',
        'street',
        'city',
        'state_id',
        'zipcode',
        'tax_id',
        'account_name',
        'dda_checking_account',
        'dd_routingno',
        'name_of_field',
        'no_of_field',
        'field_state',
        'field_city',
    ];

    protected $touches = ['users'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
