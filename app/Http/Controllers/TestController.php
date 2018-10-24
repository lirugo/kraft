<?php

namespace App\Http\Controllers;

use App\CalcHistory;
use PDF;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index($orderId){
        $orders = CalcHistory::get()->where('order_id', '=', $orderId);
        return view('order.pdf');
        $order = CalcHistory::find(13);
        $pdf = PDF::loadView('order.pdf', compact('order'));
        return $pdf->download('invoice.pdf');
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
