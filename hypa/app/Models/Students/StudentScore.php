<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Model;

class StudentScore extends Model
{
    protected $fillable=[
        'student_id','course_id',
        'session_id','exam',
        'ca','total','grade'
    ];
}
