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

class TestController extends Controller
{
    public function index(){
        $orders = new OrdersKraft();
//        $orders->_Fld53375 = 123456;
//        $orders->_Fld53376 = 123456;
//        $orders->_Fld53447 = 123456;
//        $orders->_Fld53377 = 123456;
//        $orders->_Fld53378 = 123456;
//        $orders->_Fld53446 = 123456;
//        $orders->_Fld53374 = 1;
//
//        //
//        $orders->_Fld1815 = 1;
//        $orders->_IDRRef = 1;
//        $orders->_Marked = 1;
//        $orders->_PredefinedID = 1;
//        $orders->_Code = 1;
//        $orders->_Description = 1;
//        $orders->save();
       dd($orders->getOrders());

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
    }
}
