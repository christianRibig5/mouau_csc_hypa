<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Model;

class StudentSubscription extends Model
{
    protected $fillable=[
        'student_id','subscribed'
    ];
}
