<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public function languages()
    {
        return $this->hasMany('App\Language', 'user_id', 'user_id');
    }

    public function marksObtained()
    {
        return $this->hasMany('App\MarksObtained', 'user_id', 'user_id');
    }
   
    public function optionalSubjects()
    {
        return $this->hasMany('App\OptionalSubjects', 'user_id', 'user_id');
    }

    public function uploadedDocuments()
    {
        return $this->hasMany('App\UploadedDocument', 'user_id', 'user_id');
    }
}
