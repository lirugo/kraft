<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{
    public function reports(){
        return $this->hasMany('App\Report');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'creatorid');
    }
    public function rmuser()
    {
        return $this->belongsTo('App\User', 'rmid');
    }
}
