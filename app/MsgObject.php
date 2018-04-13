<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MsgObject extends Model
{
    protected $fillable = ['message', 'object_id', 'manager_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
