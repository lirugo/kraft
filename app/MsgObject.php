<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MsgObject extends Model
{
    protected $fillable = ['message', 'object_id', 'user_id_from', 'user_id_to'];
    public function user(){
        return $this->belongsTo(User::class, 'user_id_from');
    }
}
