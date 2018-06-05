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

    public function getregion()
    {
        return $this->hasOne('App\Region', 'region_id', 'region');
    }

    public function getCompany()
    {
        return $this->hasOne('App\Company', 'id', 'companyid');
    }
}
