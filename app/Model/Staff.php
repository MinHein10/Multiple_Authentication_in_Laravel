<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use Notifiable;

    protected $guard = 'staff';

    protected $fillable = [
        'name','email','password',
    ];
    
    protected $hidden = [
        'password','remember_token',
    ];
    
}
