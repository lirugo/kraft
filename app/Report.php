<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function Object()
    {
        return $this->belongsTo('App\Object');
    }

    public function Photo()
    {
        return $this->hasMany('App\ReportPhoto', 'object_id', 'object_id');
    }
}
