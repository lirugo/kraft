<?php

namespace App\Http\Controllers\TopManager;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class TopManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:top-manager');
    }

    public function updateDistr(){
        $distributors = User::whereHas('roles', function ($query) {
            $query->where('name', '=', 'distributor');
        })->paginate(20);

        return view('topmanager.updateDistr')
            ->withDistributors($distributors);
    }

    public function updateDistrUpdate(Request $request){
        $this->validate($request, [
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ]);
        $user = User::find($request->userId);

        //Change Password
        $user->password = bcrypt($request->get('password'));
        $user->save();

       Session::flash('success', 'Данные обновленны');
       return back();

    }
}
