<?php

namespace App\Http\Controllers\Help;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelpController extends Controller
{
    public function index(){
        return view('help.index');
    }

    public function admin(){
        return view('help.admin');
    }

    public function user(){
        return view('help.user');
    }

    public function newObject(){
        return view('help.newobject');
    }

    public function regObject(){
        return view('help.regobject');
    }

    public function order(){
        return view('help.order');
    }
}
