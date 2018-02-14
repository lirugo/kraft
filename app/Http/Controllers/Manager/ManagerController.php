<?php

namespace App\Http\Controllers\Manager;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class ManagerController extends Controller
{
    public function users(){
        $user = Auth::user();
        $users = User::all()->where('region', '=' , $user->region);
        return view('manager.users')->with('users', $users);
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
}
