<?php

namespace App\Http\Controllers\Manager;

use App\Company;
use App\Http\Controllers\Controller;
use App\Object;
use App\Report;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Session;

class ManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('manager.objects.create');
    }

    public function postCreate(Request $request){
        //GetCompanyID
        $user = Auth::user();
        //$company = Company::where('companyname', $user->company)->firstOrFail();
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
//            'customersurname' => 'required|max:255',
//            'customerpatronymic' => 'required|max:255',
            'customerphone' => 'required|max:255',
            /* 'delegatebuildername' => 'required|max:255',
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
        $object->housing = $request->housing;
        //$object->postcode = $request->postcode;
        //$object->lat = $request->lat;
        //$object->lon = $request->lon;
        $object->sworks = $request->sworks;
        $object->dateofdelivery = $request->dateofdelivery;
        $object->customer = $request->customer;
        $object->customername = $request->customername;
//        $object->customersurname = $request->customersurname;
//        $object->customerpatronymic = $request->customerpatronymic;
        $object->customerposition = $request->customerposition;
        $object->customerphone = $request->customerphone;
        $object->generalbuilder = $request->generalbuilder;
        $object->delegatebuildername = $request->delegatebuildername;
//        $object->delegatebuildersurname = $request->delegatebuildersurname;
//        $object->delegatebuilderpatronymic = $request->delegatebuilderpatronymic;
        $object->delegatebuilderphone = $request->delegatebuilderphone;
        $object->subbuilder = $request->subbuilder;
        $object->subbuildername = $request->subbuildername;
//        $object->subbuildersurname = $request->subbuildersurname;
//        $object->subbuilderpatronymic = $request->subbuilderpatronymic;
        $object->subbuilderphone = $request->subbuilderphone;
        $object->archname = $request->architectname;
//        $object->archsurname = $request->architectsurname;
//        $object->archpatronymic = $request->architectpatronymic;
        $object->archphone = $request->architectphone;
        $object->designname = $request->designname;
//        $object->designsurname = $request->designsurname;
//        $object->designpatronymic = $request->designpatronymic;
        $object->designphone = $request->designphone;
        $object->photo1 = $request->scandoc1;
        $object->photo2 = $request->scandoc2;
        $object->photo3 = $request->scandoc3;
        $object->comments = $request->comments;

        if(in_array('product1', $request->products))
            $object->product1 = true;
        if(in_array('product2', $request->products))
            $object->product2 = true;
        if(in_array('product3', $request->products))
            $object->product3 = true;
        if(in_array('product4', $request->products))
            $object->product4 = true;
        if(in_array('product5', $request->products))
            $object->product5 = true;

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
        return redirect('manager/objects');
    }

    public function users(){
        $u = Auth::user();
        $users = User::all()->where('regionname', '=' , $u->regionname);
        foreach ($users as $key => $user)
            if($user->hasRole('distributor'));
                else if($user->hasRole('designer'));
                else unset($users[$key]);
        return view('manager.users')->with('users', $users);
    }

    public function distributor($id){
        $distributors = User::find($id);
        return view('manager.user')->with('distributors', $distributors);
    }

    public function designer($id){
        $user = User::find($id);
        return view('manager.designer.show')->with('user', $user);
    }

    public function distributorprofile($id){
        $user = User::find($id);
        return view('manager.distributor.profile')->with('user', $user);
    }

    public function designerprofile($id){
        $user = User::find($id);
        return view('manager.designer.profile')->with('user', $user);
    }

    public function userscompany($id){
        $user = User::find($id);
        $users = User::all()->where('company', '=', $user->company);
        $users->idback = $id;
        return view('manager.distributor.users')->with('users', $users);
    }

    public function objects(){
        $user = Auth::user();
        $objects = Object::all()->where('rmid', '=' , $user->id);
        $viewed = Object::all()->where('viewed' , '=', 0)->count();
        foreach ($objects as $object)
        {
            $creator = User::find($object->creatorid);
            $object->creatorname = $creator->name;
        }
        $data = new Collection();
        $data->put('objects',$objects);
        $data->put('viewed',$viewed);

        return view('manager.objects')->with('data', $data);
    }

    public function arch(){
        $user = Auth::user();
        $users = User::all()->where('regionname', '=' , $user->regionname);
            foreach ($users as $key => $datauser)
                if($datauser->hasRole('designer') || $datauser->hasRole('designer'));
                else unset($users[$key]);

        return view('manager.arch')->with('users', $users);
    }

    public function activateuser(Request $request, $id){
        $user = User::find($id);
        $user->active == true ? $user->active = false : $user->active = true;
        $user->vendor_code_1c = $request->vendor_code_1c;
        $user->save();
        Session::flash('success', 'User status was changed.');
        return back();
    }

    public function verifieduser(Request $request, $id){
        $user = User::find($id);
        $user->verified == true ? $user->verified = false : $user->verified = true;

        $user->save();
        Session::flash('success', 'User status was changed.');
        return back();
    }

    public function activateobject(Request $request, $id){
        $object = Object::find($id);
        if($object->active == true)
        {
            $object->dateofdelivery = $request->dateofdelivery;
            $object->save();
        }
        else{
        $object->active = true;
        $object->dateofactivate = Carbon::now();
        $object->dateofdelivery = $request->dateofdelivery;
            if($request->reporttime == 0)
                $object->reporttime = 0;
            else{
                $object->reporttime = $request->reporttime;
                $report = new Report();
                $report->object_id = $object->id;
                $report->dateofreport = Carbon::now()->addDays($request->reporttime);
                $report->save();
            }
        $object->save();
        }
        Session::flash('success', 'Object status was changed.');
        return back();
    }

    public function verifiedobject(Request $request, $id){
        $object = Object::find($id);
        $object->verify == true ? $object->verify = false : $object->verify = true;

        $object->save();
        Session::flash('success', 'Object status was changed.');
        return back();
    }

    public function showobject($id){
        $object = Object::find($id);
            $object->viewed = $object->viewed + 1;
        $object->save();
        $company = Company::find($object->companyid);
        $rm = User::find($object->rmid);
        $creator = User::find($object->creatorid);

        $object->company = $company;
        $object->rm = $rm;
        $object->creator = $creator;

        //Days to report
        $reports = $object->reports;
        $repid = 0;
        foreach ($reports as $report)
        {
            if($report->id > $repid)
            {
                $date = Carbon::parse($report->dateofreport);
                $date_diff = $date->diffInDays(Carbon::now());
                $object->daystoreport = $date_diff;
                $object->dateofreport = $report->dateofreport;
            }
        }
        //Days to report

        $managers = User::whereHas(
            'roles', function($q){
            $q->where('name', 'Manager');
        }
        )->get();
        $distr = User::whereHas(
            'roles', function($q){
            $q->where('name', 'Distributor');
        }
        )->get();
        $distributors = [];
        foreach ($distr as $d){
            $distributors[$d->id] = $d->getcompany->companyname;
        }
        $managers = $managers->pluck('name','id');
        return view('manager.objects.show')->with('object', $object)->with('managers', $managers)->with('distributors', $distributors);
    }

    public function transferTo(Request $request, $objectId){
        $object = Object::find($objectId);
            $object->rmid = $request->manager;
        $object->save();

        Session::flash('success', 'Object was transferred to another manager.');
        return redirect('/manager/objects');

    }

    public function transferToDistributor(Request $request, $objectId){
        $object = Object::find($objectId);
        $object->creatorid = $request->distributor;
        $object->companyid = User::find($request->distributor)->getcompany->id;
        $object->save();

        Session::flash('success', 'Object was transferred to another distributor.');
        return redirect('/manager/objects');

    }
}
