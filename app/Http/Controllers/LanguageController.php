<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class LanguageController extends Controller
{
    public function index(Request $request){
       if(!Session::has('locale')){
           Session::put('locale', $request->lang);
       } else {
           Session::put('locale', $request->lang);
       }

       return redirect()->back();
    }
}
