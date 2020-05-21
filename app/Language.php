<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'reg_languages';
    protected $fillable=[
        'user_id', 'language'
    ];
}
