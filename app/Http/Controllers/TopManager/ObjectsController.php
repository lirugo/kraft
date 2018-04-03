<?php

namespace App\Http\Controllers\TopManager;

use App\Object;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

class ObjectsController extends Controller
{
    public function index(Request $request){
        if($request->sort === 'date_asc')
            $objects = Object::orderBy('dateofdelivery', 'asc')->get();
        else  if($request->sort === 'date_desc')
            $objects = Object::orderBy('dateofdelivery', 'desc')->get();
        else
            $objects = Object::all();
        $data = new Collection();
        $data->put('objects',$objects);
        $data->put('sort', $request->sort);

        return view('topmanager.objects.index')->with('data', $data);
    }
}
