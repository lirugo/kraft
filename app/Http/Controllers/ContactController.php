<?php

namespace App\Http\Controllers;

use App\CalcHistory;
use App\Mail\Contact;
use App\Mail\Order;
use App\User;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Auth;

class ContactController extends Controller
{
    public function send(Request $request){

            Mail::send('emails.contact', array('request' => $request, 'email' => Auth::user()->email), function($message)
            {
                $message->from(env('MAIL_USERNAME'));
                $message->to(env('MAIL_USERNAME'), 'No-Replay')->subject('Contact us Form');
            });

//            $sent = Mail::to('noreply@kraftds.com')->send(new Contact($request));
        return 1;
    }
    public function order(Request $request, $order_id){
        $orders = CalcHistory::all()->where('order_id', $order_id);
        Mail::to("nd@potolok.ua")->send(new Order($orders));
        return back();
    }
}
