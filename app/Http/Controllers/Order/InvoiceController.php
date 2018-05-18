<?php

namespace App\Http\Controllers\Order;

use App\CalcHistory;
use App\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class InvoiceController extends Controller
{
    public function send($orderId){
//        dd(Invoice::all());
        //Get order
        $orders = CalcHistory::where('order_id', '=', $orderId)->where('status', '=', false)->get();
        foreach ($orders as $order){
            //Create invoice
            $invoice = new Invoice();
            $invoice->_Fld53374 = false;
            $invoice->_Fld53375 = 123;
            $invoice->_Fld53376 = Auth::user()->vendor_code_1c;
            $invoice->_Fld53377 = 123;
            $invoice->_Fld53378 = $order->pack*$order->count_pack;
            $invoice->save();
            //Change status order
//            $order->status = true;
//            $order->save();
        }
        //Return back show msg
        Session::flash('success', 'Счет формируется ожидайте');
        return back();
    }
}
