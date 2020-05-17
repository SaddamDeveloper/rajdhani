<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionalSubjects extends Model
{
    protected $table = 'reg_optional_subjects';
    protected $fillable=[
        'user_id', 'subject_name'
    ];
}
