<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'user_id_from',
        'user_id_to',
        'object_id',
        'title',
        'body',
    ];
}
