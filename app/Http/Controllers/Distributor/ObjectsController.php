<?php

namespace App\Http\Controllers\Distributor;

use App\Object;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ObjectsController extends Controller
{
    public function objects(){
        $user = Auth::user();
        return view('company.objects')->with('objects', $user->getcompany->objects);
    }

    public function objectshow($id){
        $object = Object::find($id);
        return view('company.showobject')->with('object', $object);
    }
}
