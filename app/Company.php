<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function objects()
    {
        return $this->hasMany('App\Object', 'companyid');
    }
}
