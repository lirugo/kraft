<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersKraft extends Model
{
    //Select connection to mssql
    protected $connection = 'sqlsrv';
    //Select table
    protected $table = '_Reference53373';

    public $timestamps = false;

    /**
     * @param $id
     * @return mixed
     */
    public function getOrders(){
        return $this->get();
    }
}
