<?php

namespace App\Http\Controllers;

use App\CalcHistory;
use App\Mail\Contact;
use App\Mail\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request){
        Mail::to('it@iib.com.ua')->send(new Contact($request));
        // Laravel tells us exactly what email addresses failed, let's send back the first
        return 1;
    }
    public function order(Request $request, $order_id){
        $orders = CalcHistory::all()->where('order_id', $order_id);
        Mail::to("nd@potolok.ua")->send(new Order($orders));
        return back();
    }
}
