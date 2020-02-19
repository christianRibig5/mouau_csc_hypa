<?php

namespace App\Models\Courses;

use Illuminate\Database\Eloquent\Model;

class CourseAllocation extends Model
{
    protected $fillable=[
        'lecturer_id','course_id'      
    ];
}
