<?php

namespace App\Http\Controllers;

use App\ProductKraft;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return ProductKraft::all();
    }
}
