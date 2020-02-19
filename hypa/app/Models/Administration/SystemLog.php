<?php

namespace App\Models\Administration;

use Illuminate\Database\Eloquent\Model;

class SystemLog extends Model
{
    protected $fillable=[
        'log_message',
        'user_id',
        'time'
    ];
}
