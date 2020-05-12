<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=[
      'event_heading',
      'event_date',
      'event_month',
      'event_year',
      'event_description',
      'event_time',
      'event_location',

    ];
}
