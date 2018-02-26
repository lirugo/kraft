<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportPhoto extends Model
{
    public function Report()
    {
        return $this->belongsTo('App\Report');
    }
}
