<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request){
        Mail::to("admin@kraft.com")->send(new Contact($request));
        return back();
    }
}
