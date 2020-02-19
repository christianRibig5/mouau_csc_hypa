<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'reg_number','user_id',
        'dept_id','admission_year',
        'admission_mode','level'
    ];
}
