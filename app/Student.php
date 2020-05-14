<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;
        protected $guard = 'student';
        protected $table = 'students';

        protected $fillable = [
            'name', 'mobile', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
