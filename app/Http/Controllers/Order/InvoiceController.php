<?php

namespace App\Http\Controllers\Order;

use App\CalcHistory;
use App\Company;
use App\Invoice;
use App\Object;
use App\OrdersKraft;
use App\Region;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use PhpParser\ErrorHandler\Collecting;

class InvoiceController extends Controller
{
    public function send(Request $request, $orderId){
        //validate
        if(Auth::user()->vendor_code_1c == NULL){
            Session::flash('warning', 'Ваш пользователь не привязан к 1С, обратитесь к менеджеру.');
            return back();
        }

        //Get order
        $orders = CalcHistory::where('order_id', '=', $orderId)->where('status', '=', false)->get();

        $i = 1;
        foreach ($orders as $order){
            if(!$order->production) {
                $ords[$i] = [
                    'order_id' => $order->order_id,
                    'user_id' => Auth::user()->id,
                    'user_id_1c' => Auth::user()->vendor_code_1c,
                    'product_id' => $order->vendor_code,
                    'quantity' => $order->count,
                    'stock' => $order->stock,
                    'status' => 0,
                    'production' => $order->production,
                    'one_length' => $order->one_length,
                    'mp' => $order->mp,
                    'count_production' => $order->count_production,
                ];
                $i++;
                $order->order_available = true;
                $order->status = true;
                $order->save();
            }
        }

        $params = [
            'pickup' => $request->pickup == 'on' ? '1' : '0',
            'payment' => $request->payment,
            'stock' => $order->stock == 0 ? '0' : '1'
        ];

        $details = array_merge($params);
        if(!is_null($orders[0]->object_id)){
            $obj = Object::find($orders[0]->object_id);
            $cmpn = Company::find($obj->companyid);
            $companyDetail = [
                'company_name' => $cmpn->companyname,
                'manager' => User::find($cmpn->rmid)->name,
            ];

            $address = [
                'region' => Region::where('region_id', $obj->region)->first()->regionname_ru. ' область',
                'city' => $obj->city,
                'street' => $obj->street,
                'house' => $obj->house,
                'housing' => $obj->housing,
            ];

            $object = [
                'object_name' => $obj->name,
                's_works' => $obj->sworks,
                'customer' => $obj->customer,
                'general_builder' => $obj->generalbuilder,
                'sub_builder' => $obj->subbuilder,
            ];
            $details = array_merge($details, $address, $companyDetail, $object);
        }

        $ords = array_merge($ords, ['details' => $details]);

dd(json_encode($ords, JSON_UNESCAPED_UNICODE));
        //Send to web 1C
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_PORT => env("CURL_1C_PORT"),
            CURLOPT_URL => env("CURL_1C_URL"),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($ords, JSON_UNESCAPED_UNICODE),
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
                'Content-Type: application/json',
            ),
        ));
        curl_setopt($curl, CURLOPT_USERPWD, env("CURL_1C_USER").":".env("CURL_1C_PASSWORD"));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            Session::flash('error', 'Извините, не получилось отправить Ваш счет, обратитесь к администрации.');
        } else {
            Session::flash('success', trans('app.Invoice is formed, expect'));
        }

        //Return back show msg
        return back();
    }
}
