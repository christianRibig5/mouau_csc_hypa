<?php

namespace App\Models\Administration;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $fillable=[
        'title',
        'staff_id',
        'user_id'
    ];
}
