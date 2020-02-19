<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable=[
        'state_name','country_id'
    ];
}
