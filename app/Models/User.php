<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
        'status',
        'hp',
        'foto'
    ];

    protected $hidden = [
        'password',
    ];
}
