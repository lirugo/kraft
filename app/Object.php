<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Object extends Model
{
    public function reports(){
        return $this->hasMany('App\Report');
    }


}
