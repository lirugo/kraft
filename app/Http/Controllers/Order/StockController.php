<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
    public function index(){
        return view('order.stock.index');
    }

    public function show(){
        return view('order.stock.show');
    }
}
