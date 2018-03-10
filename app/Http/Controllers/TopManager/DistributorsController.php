<?php

namespace App\Http\Controllers\TopManager;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DistributorsController extends Controller
{
    public function index(){
        $users = User::all();
        foreach ($users as $key => $user)
            if($user->hasRole('distributor'));
            else if($user->hasRole('designer'));
            else unset($users[$key]);
        return view('topmanager.distributors.index')->with('users',$users);
    }
}
