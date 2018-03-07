<?php

namespace App\Http\Controllers\Calc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalcController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('calc.index');
    }
    public function tprofile(){
        return view('calc.tprofile');
    }
}
