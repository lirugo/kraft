<?php

namespace App\Http\Controllers\Order;

use App\CalcHistory;
use App\Invoice;
use App\OrdersKraft;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class InvoiceController extends Controller
{
    public function send($orderId){
        //validate
        if(Auth::user()->vendor_code_1c == NULL){
            Session::flash('warning', 'Ваш пользователь не привязан к 1С, обратитесь к менеджеру.');
            return back();
        }

        //Get order
        $orders = CalcHistory::where('order_id', '=', $orderId)->where('status', '=', false)->get();
        foreach ($orders as $order){
            //Create invoice
            $ordKraft = new OrdersKraft();
                //order_id
                $ordKraft->_Fld53375 = $order->order_id;
                //user_id
                $ordKraft->_Fld53376 = Auth::user()->id;
                //user_1c_id
                $ordKraft->_Fld53447 = Auth::user()->vendor_code_1c;
                //product_id
                $ordKraft->_Fld53377 = $order->vendor_code;
                //count
                $ordKraft->_Fld53378 = $order->count_pack*$order->pack;
                //stock
                $ordKraft->_Fld53446 = $order->stock;
                //status
                $ordKraft->_Fld53374 = 0;

                //DEFAULT ROWS
                $ordKraft->_IDRRef = $order->id;
                $ordKraft->_Fld1815 = 1;
                $ordKraft->_Marked = 1;
                $ordKraft->_PredefinedID = 1;
                $ordKraft->_Code = 1;
                $ordKraft->_Description = 1;
        $ordKraft->save();

//            Change status order
            $order->status = true;
            $order->save();
        }
        //Return back show msg
        Session::flash('success', 'Счет формируется ожидайте');
        return back();
    }
}
