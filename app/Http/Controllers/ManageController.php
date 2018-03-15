<?php

namespace App\Http\Controllers;

use App\CompanyChange;
use App\Object;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Collection;

class ManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
        $user = Auth::user();
        $object = Object::all()->where('viewed' , '=', 0)->where('regionname','=', $user->regionname)->count();
        $ch = CompanyChange::all()->where('done', '=', false)->count();
        //DistributorAndDesigner
        $distributors = User::whereHas('roles', function ($query) {
            $query->where('name', '=', 'distributor');
        })->get();
        $designers = User::whereHas('roles', function ($query) {
            $query->where('name', '=', 'designer');
        })->get();
        foreach ($distributors as $key => $distributor)
            if($distributor->active == true)
                unset($distributors[$key]);
        foreach ($designers as $key => $designer)
            if($designer->active == true)
                unset($designers[$key]);
        //DistributorAndDesigner

        $data = new Collection();
        $data->put('objects',$object);
        $data->put('ch',$ch);
        $data->put('clients',count($designers)+count($distributors));


        if($user->hasRole('manager'))
            return view('manage.dashboardmanager')->with('data', $data);
        else
            if($user->hasRole('top-manager'))
                return view('manage.dashboardtop-manager');
        else
            if($user->hasRole('designer'))
                return view('manage.dashboarddesigner');
        else
            if($user->hasRole('distributor'))
                return view('manage.dashboardcompany');
        else
            if($user->hasRole('worker'))
                return view('manage.dashboardworker');
        else
            return abort(403);

    }
}
