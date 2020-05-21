<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarksObtained extends Model
{
    protected $table = 'reg_marks_obtained';
    protected $fillable=[
        'user_id', 'subjects', 'max_marks', 'marks_obtained'
    ];
}
