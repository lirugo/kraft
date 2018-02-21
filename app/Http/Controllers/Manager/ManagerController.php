<?php

namespace App\Http\Controllers\Manager;

use App\Company;
use App\Object;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class ManagerController extends Controller
{
    public function users(){
        $user = Auth::user();
        $users = User::all()->where('regionname', '=' , $user->regionname);
        foreach ($users as $key => $datauser)
            if($datauser->hasRole('distributor'));
            else unset($users[$key]);

        return view('manager.users')->with('users', $users);
    }

    public function objects(){
        $user = Auth::user();
        $objects = Object::all()->where('regionname', '=' , $user->regionname);
        foreach ($objects as $object)
        {
            $creator = User::find($object->creatorid);
            $object->creatorname = $creator->name;
        }

        return view('manager.objects')->with('objects', $objects);
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
        $object->active = true;
        $object->dateofactivate = Carbon::now();
        $object->dateofreport = Carbon::now()->addDays($request->reporttime);
        $object->reporttime = $request->reporttime;
        $object->save();

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
        $ob = Object::find($id);
        $company = Company::find($object->companyid);
        $rm = User::find($object->rmid);
        $creator = User::find($object->creatorid);

        $object->company = $company;
        $object->rm = $rm;
        $object->creator = $creator;

        //Days to report
        if($ob->dateofreport == Carbon::now()->format('Y-m-d'));
        {
            $ob->dateofreport = Carbon::now()->addDays($ob->reporttime);
            $ob->save();
        }
      
        if(!empty($object->dateofreport)){
            $date1 = Carbon::parse($object->dateofreport);
            $date_diff = $date1->diffInDays(Carbon::now());
            $object->daystoreport = $date_diff;
        }
        //Days to report


        return view('manager.objects.show')->with('object', $object);
    }

}
