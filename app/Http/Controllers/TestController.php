<?php

namespace App\Http\Controllers;

use App\ProductKraft;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        dd(ProductKraft::getProduct('00-00000450')->getPrice());
    }
}
