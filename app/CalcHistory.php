<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalcHistory extends Model
{
    public function object()
    {
        return $this->hasOne('App\Object');
    }
}
