<?php

namespace App\Models\Courses;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=[
            'course_title','course_code',
            'credit_unit', 'category',
            'level','semester',
            'verification_status'
    ];
}
