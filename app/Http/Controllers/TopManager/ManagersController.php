<?php

namespace App\Http\Controllers\TopManager;

use App\Company;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

class ManagersController extends Controller
{
    public function index(){
        $users = User::whereHas('roles', function($q)
        {
            $q->where('name', 'manager');
        })->get();
        return view('topmanager.managers.index')->with('users', $users);
    }

    public function show($id){
        $user = User::find($id);
        $distributors = User::whereHas('roles', function($q)
        {
            $q->where('name', 'distributor');
        })->get();
        foreach ($distributors as $key => $distributor)
            if ($distributor->regionname != $user->regionname) {
                $distributors->forget($key);
            }
        $data = new Collection;
        $data->put('user' , $user);
        $data->put('distributors' , $distributors);

        return view('topmanager.managers.show')->with('data',$data);
    }
}
