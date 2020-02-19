<?php

namespace App\Models\Administration;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable=[
        'staff_id',
        'user_id',
        'designation'
    ];
}
