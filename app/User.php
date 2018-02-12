<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    const _MALE=0;
    const _FEMALE=1;
    const _ORTHER=2;

    protected $fillable = [
        'name', 'email', 'password','address','gender','birthday',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
