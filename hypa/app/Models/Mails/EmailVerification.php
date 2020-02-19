<?php

namespace App\Models\Mails;

use Illuminate\Database\Eloquent\Model;

class EmailVerification extends Model
{
    protected $fillable=[
        'email','verification_code',
        'verified'
    ];
}
