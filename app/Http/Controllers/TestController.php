<?php

namespace App\Http\Controllers;

use App\Notification;
use App\Object;
use App\ProductKraft;
use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
       $object = Object::find(3);
       dd($object->getCompany->id);
    }
}
