<?php

namespace App\Http\Controllers;

use App\Notification;
use App\Object;
use App\OrdersKraft;
use App\ProductKraft;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;
use PDOException;
use SoapClient;
use SoapFault;

class TestController extends Controller
{
    public function index(){
        return view('test');
    }

    public function test2(){
        $us = DB::connection('sqlsrv')->insert('
            INSERT INTO _Reference53373 (
               _IDRRef
              ,_Marked
              ,_PredefinedID
              ,_Code
              ,_Description
              ,_Fld53374
              ,_Fld53375
              ,_Fld53376
              ,_Fld53377
              ,_Fld53378
              ,_Fld53446
              ,_Fld53447
              ,_Fld1815
            )
            VALUES (1,1,1,1,1,1,1,1,1,11,1,1,1)
        ');
        dd($us);
        $us = DB::connection('sqlsrv')->insert('
                DELETE FROM _Reference53373
        ');
        dd('OK');

    }
}
