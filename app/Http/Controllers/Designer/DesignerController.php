<?php

namespace App\Http\Controllers\Designer;

use App\Object;
use App\User;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DesignerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showobject(){
        $user = Auth::user();
        $objects = Object::all()->where('creatorid', '=' , $user->id);
        foreach ($objects as $object)
        {
            $creator = User::find($object->creatorid);
            $object->creatorname = $creator->name;
            if(!empty($object->rmid))
            {
                $rm = User::find($object->rmid);
                $object->rmname = $rm->name;
                $object->rmphone = $rm->phone;
            }
        }
        return view('designer.showobject')->with('objects', $objects);
    }

    public function object(){
        return view('designer.object');
    }

    public function getobject($id){
        $object = Object::find($id);
        return view('designer.getobject')->with('object', $object);
    }

    public function objectpost(Request $request){
        //GetCompanyID
        $user = Auth::user();
        //Validate
        $this->validate($request,[
            //Validate company profile
            'name' => 'required|max:255',
            'type' => 'required|max:25',
            //'country' => 'required|max:255',
            'region' => 'required|max:255',
            'city' => 'required|max:255',
            'street' => 'required|max:255',
            'house' => 'required|max:255',
            //'postcode' => 'required|max:20',
            //'lat' => 'required|max:255',
            //'lon' => 'required|max:255',
            'sworks' => 'required|integer',
            'customer' => 'required|max:255',
            'customername' => 'required|max:255',
            'customerphone' => 'required|max:255',
            //'generalbuilder' => 'required|max:255',
            /* 'delegatebuildername' => 'required|max:255',
             'delegatebuilderphone' => 'required|max:255',
             'subbuilder' => 'required|max:255',
             'subbuildername' => 'required|max:255',
             'subbuilderphone' => 'required|max:255',
             'architectname' => 'required|max:255',
             'architectphone' => 'required|max:255',
             'designname' => 'required|max:255',
             'designphone' => 'required|max:255',
             'comments' => 'required|max:255',*/
        ]);
        // Save data to db
        $object = new Object();
        $object->creatorid = $user->id;
        $object->name = $request->name;
        $object->type = $request->type;
        //$object->country = $request->country;
        //Region
        if($request->region[0] == 1)
            $regionname = "center";
        elseif($request->region[0] == 2)
            $regionname = "east";
        elseif($request->region[0] == 3)
            $regionname = "south";
        elseif($request->region[0] == 4)
            $regionname = "west";
        $object->region = $request->region;
        $object->regionname = $regionname;
        $object->locationinformation = $request->locationinformation;

        //RmID
        $users = User::all();
        $rm = null;
        foreach($users as $user)
        {
            if($user->hasRole('manager') && $user->regionname == $regionname)
                $rm = $user->id;
        }
        $object->rmid = $rm;
        //EndRegion
        $object->city = $request->city;
        $object->street = $request->street;
        $object->house = $request->house;
        //$object->postcode = $request->postcode;
        //$object->lat = $request->lat;
        //$object->lon = $request->lon;
        $object->sworks = $request->sworks;
        $object->dateofdelivery = $request->dateofdelivery;
        $object->customer = $request->customer;
        $object->customername = $request->customername;
        $object->customerposition = $request->customerposition;
        $object->customerphone = $request->customerphone;
        $object->generalbuilder = $request->generalbuilder;
        $object->delegatebuildername = $request->delegatebuildername;
        $object->delegatebuilderphone = $request->delegatebuilderphone;
        $object->subbuilder = $request->subbuilder;
        $object->subbuildername = $request->subbuildername;
        $object->subbuilderphone = $request->subbuilderphone;
        $object->archname = $request->architectname;
        $object->archphone = $request->architectphone;
        $object->designname = $request->designname;
        $object->designphone = $request->designphone;
        $object->photo1 = $request->scandoc1;
        $object->photo2 = $request->scandoc2;
        $object->photo3 = $request->scandoc3;
        $object->comments = $request->comments;

        if(isset($request->product1))$object->product1 = $request->product1;
        if(isset($request->product2))$object->product2 = $request->product2;
        if(isset($request->product3))$object->product3 = $request->product3;
        if(isset($request->product4))$object->product4 = $request->product4;
        if(isset($request->product5))$object->product5 = $request->product5;

        // IF have scan docs then save
        if(isset($request->photos[0]))$object->photo1 = $request->photos[0];
        if(isset($request->photos[1]))$object->photo2 = $request->photos[1];
        if(isset($request->photos[2]))$object->photo3 = $request->photos[2];
        if(isset($request->photos[3]))$object->photo4 = $request->photos[3];
        if(isset($request->photos[4]))$object->photo5 = $request->photos[4];
        $object->specificationid = $request->specificationid;

        $object->save();

        //Set Flash message
        Session::flash('success', 'Object was successfully created.');
        //Redirect
        return redirect('designer/object/show');
    }
}
