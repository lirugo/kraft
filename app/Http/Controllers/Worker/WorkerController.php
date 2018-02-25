<?php

namespace App\Http\Controllers\Worker;

use App\Company;
use App\Object;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WorkerController extends Controller
{
    public function objects(){
        $user = Auth::user();
        $company = Company::where('companyname', '=', $user->company)->first();
        $objects = $company->objects;
        return view('worker.objects')->with('objects', $objects);
    }

    public function objectshow($id){
        $object = Object::find($id);
        return view('worker.object')->with('object', $object);
    }
}
