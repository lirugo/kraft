<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class LanguageController extends Controller
{
    public function index(){
       if(!Session::has('locale')){
           Session::put('locale', Input::get('locale'));
       } else {
           Session::set('locale', Input::get('locale'));
       }

       return redirect()->back();
    }
}
