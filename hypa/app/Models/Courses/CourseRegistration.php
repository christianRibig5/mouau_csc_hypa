<?php

namespace App\Models\Courses;

use Illuminate\Database\Eloquent\Model;

class CourseRegistration extends Model
{
    protected $fillable=[
        'student_id','course_id'
    ];
}
