<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $fillable=[
      'name',
      'class',
      'g_name',
      'phone',
      'email',
      'location',
      'photo',
    ];
}
