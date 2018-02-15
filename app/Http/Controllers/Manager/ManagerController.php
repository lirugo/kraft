<?php

namespace App\Http\Controllers\Manager;

use App\Company;
use App\Object;
use App\User;
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
            if($datauser->hasRole('distributor') || $datauser->hasRole('designer'));
            else unset($users[$key]);

        return view('manager.users')->with('users', $users);
    }

    public function objects(){
        $user = Auth::user();
        $objects = Object::all()->where('regionname', '=' , $user->regionname);
        return view('manager.objects')->with('objects', $objects);
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
        $object->active == true ? $object->active = false : $object->active = true;
        $object->save();
        Session::flash('success', 'Object status was changed.');
        return back();
    }

    public function verifiedobject(Request $request, $id){
        $object = User::find($id);
        $object->verified == true ? $object->verified = false : $object->verified = true;

        $object->save();
        Session::flash('success', 'Object status was changed.');
        return back();
    }

}
