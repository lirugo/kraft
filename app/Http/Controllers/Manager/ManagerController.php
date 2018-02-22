<?php

namespace App\Http\Controllers\Manager;

use App\Company;
use App\Object;
use App\Report;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class ManagerController extends Controller
{
    public function users(){
        $u = Auth::user();
        $users = User::all()->where('regionname', '=' , $u->regionname);
        foreach ($users as $key => $user)
            if($user->active == true && $user->hasRole('distributor'));
            else if($user->active == true && $user->hasRole('designer'));
            else unset($users[$key]);
        return view('manager.users')->with('users', $users);
    }

    public function distributor($id){
        $distributors = User::find($id);
        return view('manager.user')->with('distributors', $distributors);
    }

    public function distributorprofile($id){
        $user = User::find($id);
        return view('manager.distributor.profile')->with('user', $user);
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
        $object->reporttime = $request->reporttime;

            $report = new Report();
            $report->object_id = $object->id;
            $report->dateofreport = Carbon::now()->addDays($request->reporttime);
            $report->save();

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


        return view('manager.objects.show')->with('object', $object);
    }

}
