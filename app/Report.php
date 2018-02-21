<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function Object()
    {
        return $this->belongsTo('App\Object');
    }
}
