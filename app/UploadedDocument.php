<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadedDocument extends Model
{
    protected $table = 'reg_uploaded_document';
    protected $fillable=[
        'user_id', 'document', 'document_name'
    ];
}
