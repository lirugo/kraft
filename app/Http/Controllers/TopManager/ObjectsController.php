<?php

namespace App\Http\Controllers\TopManager;

use App\Company;
use App\Object;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

class ObjectsController extends Controller
{
    public function index(Request $request){
//         if($request->sort === 'date_asc')
//             $objects = Object::orderBy('dateofdelivery', 'asc')->get();
//         else  if($request->sort === 'date_desc')
//             $objects = Object::orderBy('dateofdelivery', 'desc')->get();
//         else
//             $objects = Object::all();
        $objects = Object::orderBy('сreated_at', 'desc')->get();

        foreach ($objects as $object)
        {
            if(!is_null($object)){
                if(!is_null($object->creatorid)){
                    $creator = User::find($object->creatorid);
                    if(!is_null($creator)){
                        $object->creatorname = $creator->name;
                        $object->distr = $object->companyid != null ? Company::find($object->companyid)->companyname : '';
                    }
                }
            }
        }
        $data = new Collection();
        $data->put('objects',$objects);
        $data->put('sort', $request->sort);

        return view('topmanager.objects.index')->with('data', $data);
    }
}
