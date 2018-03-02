<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyChange extends Model
{
    public function company(){
        return $this->hasOne('App\Company','id');
    }
}
