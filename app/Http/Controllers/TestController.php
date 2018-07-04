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

class TestController extends Controller
{
    public function index(){
        function Connect1C(){
            if (!function_exists('is_soap_fault')){
                print 'Не настроен web сервер. Не найден модуль php-soap.';
                return false;
            }
            try {
                $client1C = new SoapClient('http://10.200.5.44/ERP/hs/ExchengeKalk/',
                    array('login'          => 'Админ',
                        'password'       => '3',
                        'soap_version'   => SOAP_1_2,
                        'cache_wsdl'     => WSDL_CACHE_NONE, //WSDL_CACHE_MEMORY, //, WSDL_CACHE_NONE, WSDL_CACHE_DISK or WSDL_CACHE_BOTH
                        'exceptions'     => true,
                        'trace'          => 1));
            }catch(SoapFault $e) {
                trigger_error('Ошибка подключения или внутренняя ошибка сервера. Не удалось связаться с базой 1С.', E_ERROR);
                var_dump($e);
            }
            //echo 'Раз';
            if (is_soap_fault(Клиент1С)){
                trigger_error('Ошибка подключения или внутренняя ошибка сервера. Не удалось связаться с базой 1С.', E_ERROR);
                return false;
            }
            return $client1C;
        }

        function GetData($idc, $txt){
            if (is_object($idc)){

                try {
                    $par = array('zapros' => $txt);
                    //var_dump($par);
                    $ret1c = $idc->hellobaza($par);
                } catch (SoapFault $e) {
                    echo "АЩИБКА!!! </br>";
                    var_dump($e);
                }
            }
            else{
                echo 'Не удалося подключиться к 1С';
                var_dump($idc);
            }
            return $ret1c;
        }

        $idc = Connect1C();
        $ret1c = GetData($idc, "привет");
        //var_dump($ret1c);
        $aa=$ret1c->return;
        echo "!!$aa!!";

        dd('OK');
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
