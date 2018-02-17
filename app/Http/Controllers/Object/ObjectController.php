<?php

namespace App\Http\Controllers\Object;

use App\Object;
use App\Company;
use App\User;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ObjectController extends Controller
{
    public function show(){
        $user = Auth::user();
        $company = Company::where('companyname', $user->company)->firstOrFail();
        $objects = Object::all()->where('companyid', '=' , $company->id);

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

        return view('object.show')->with('objects', $objects);
    }

    public function register(){
        $region = [
            'Киевская область',
            'Днепропетровская область',
            'Донецкая область',
            'Запорожская область',
            'Полтавская область',
            'Харьковская область',
            'Одесская область',
            'Луганская область',
            'г. Севастополь',
            'Николаевская область',
            'Черкасская область',
            'Львовская область',
            'Автономная Республика Крым',
            'Сумская область',
            'Кировоградская область',
            'Черниговская область',
            'Ивано-Франковская область',
            'Волынская область',
            'Ровненская область',
            'Винницкая область',
            'Херсонская область',
            'Хмельницкая область',
            'Житомирская область',
            'Закарпатская область',
            'Черновицкая область',
            'Тернопольская область',
        ];
        return view('object.register')->with('region', $region);
    }

    public function postregister(Request $request){
        //GetCompanyID
        $user = Auth::user();
        $company = Company::where('email', $user->email)->firstOrFail();
        //Validate
        $this->validate($request,[
            //Validate company profile
            'name' => 'required|max:255',
            'country' => 'required|max:255',
            'region' => 'required|max:255',
            'city' => 'required|max:255',
            'street' => 'required|max:255',
            'postcode' => 'required|max:20',
            'lat' => 'required|max:255',
            'lon' => 'required|max:255',
            'sworks' => 'required|integer|max:255',
            'customer' => 'required|max:255',
            'customername' => 'required|max:255',
            'customersurname' => 'required|max:255',
            'customerpatronymic' => 'required|max:255',
            'customerphone' => 'required|max:255',
            'generalbuilder' => 'required|max:255',
            'delegatebuildername' => 'required|max:255',
            'delegatebuildersurname' => 'required|max:255',
            'delegatebuilderpatronymic' => 'required|max:255',
            'delegatebuilderphone' => 'required|max:255',
            'subbuilder' => 'required|max:255',
            'subbuildername' => 'required|max:255',
            'subbuildersurname' => 'required|max:255',
            'subbuilderpatronymic' => 'required|max:255',
            'subbuilderphone' => 'required|max:255',
            'architectname' => 'required|max:255',
            'architectsurname' => 'required|max:255',
            'architectpatronymic' => 'required|max:255',
            'architectphone' => 'required|max:255',
            'designname' => 'required|max:255',
            'designsurname' => 'required|max:255',
            'designpatronymic' => 'required|max:255',
            'designphone' => 'required|max:255',
            'comments' => 'required|max:255',
        ]);
        // Save data to db
        $object = new Object();
        $object->companyid = $company->id;
        $object->creatorid = $user->id;
        $object->name = $request->name;
        $object->country = $request->country;
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
        $object->postcode = $request->postcode;
        $object->lat = $request->lat;
        $object->lon = $request->lon;
        $object->sworks = $request->sworks;
        $object->dateofdelivery = $request->dateofdelivery;
        $object->customer = $request->customer;
        $object->customername = $request->customername;
        $object->customersurname = $request->customersurname;
        $object->customerpatronymic = $request->customerpatronymic;
        $object->customerphone = $request->customerphone;
        $object->generalbuilder = $request->generalbuilder;
        $object->delegatebuildername = $request->delegatebuildername;
        $object->delegatebuildersurname = $request->delegatebuildersurname;
        $object->delegatebuilderpatronymic = $request->delegatebuilderpatronymic;
        $object->delegatebuilderphone = $request->delegatebuilderphone;
        $object->subbuilder = $request->subbuilder;
        $object->subbuildername = $request->subbuildername;
        $object->subbuildersurname = $request->subbuildersurname;
        $object->subbuilderpatronymic = $request->subbuilderpatronymic;
        $object->subbuilderphone = $request->subbuilderphone;
        $object->archname = $request->architectname;
        $object->archsurname = $request->architectsurname;
        $object->archpatronymic = $request->architectpatronymic;
        $object->archphone = $request->architectphone;
        $object->designname = $request->designname;
        $object->designsurname = $request->designsurname;
        $object->designpatronymic = $request->designpatronymic;
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
        return redirect('object/show');
    }
}
