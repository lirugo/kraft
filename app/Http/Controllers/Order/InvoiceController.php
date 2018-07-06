<?php

namespace App\Http\Controllers\Order;

use App\CalcHistory;
use App\Invoice;
use App\OrdersKraft;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PhpParser\ErrorHandler\Collecting;

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
        $i = 1;
        foreach ($orders as $order){
            //Create invoice
//            $ords = new Collection();
//            //order_id
//            $ords->_Fld53375 = $order->order_id;
//            //user_id
//            $ords->_Fld53376 = Auth::user()->id;
//            //user_1c_id
//            $ords->_Fld53447 = Auth::user()->vendor_code_1c;
//            //product_id
//            $ords->_Fld53377 = $order->vendor_code;
//            //count
//            $ords->_Fld53378 = $order->count_pack*$order->pack;
//            //stock
//            $ords->_Fld53446 = 0;
//            //status
//            $ords->_Fld53374 = 0;

//            set JSON
            $ords[$i] = [
                'order_id' => $order->id,
                'user_id' => Auth::user()->id,
                'user_id_1c' => '00-00000341',
                'product_id' => $order->vendor_code,
                'quantity' => $order->count_pack*$order->pack,
                'stock' => $order->stock,
                'status' => 0,
            ];
            $i++;


//            Change status order
//            $order->status = true;
//            $order->save();
        }
        //Send to web 1C
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "8384",
            CURLOPT_URL => "http://erp.kraftds.com:8384/ERP/hs/ExchengeKalk",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($ords),
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
                'Content-Type: application/json',
            ),
        ));
        curl_setopt($curl, CURLOPT_USERPWD, "Admin:3");
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            Session::flash('error', 'Извините, не получилось отправить Ваш счет, обратитесь к администрации.');
        } else {
            Session::flash('success', 'Счет формируется ожидайте');
        }

        //Return back show msg
        return back();
    }
}
