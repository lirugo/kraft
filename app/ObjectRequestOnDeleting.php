<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjectRequestOnDeleting extends Model
{
    public function object(){
        return $this->belongsTo(Object::class, 'object_id', 'id');
    }
}
