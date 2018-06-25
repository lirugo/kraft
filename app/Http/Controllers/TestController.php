<?php

namespace App\Http\Controllers;

use App\Notification;
use App\Object;
use App\OrdersKraft;
use App\ProductKraft;
use App\User;
use Illuminate\Http\Request;
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
}
