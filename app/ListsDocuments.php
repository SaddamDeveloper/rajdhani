<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListsDocuments extends Model
{
    protected $table = 'reg_list_document';
    protected $fillable=[
        'user_id', 'document_name'
    ];
}
