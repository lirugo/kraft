<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //Select connection to mssql
    protected $connection = 'sqlsrv';
    //Select table
    protected $table = '_Reference53373';
    //Disable timestamps
    public $timestamps = false;
}
