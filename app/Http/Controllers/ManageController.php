<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ManageController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        if($user->hasRole('manager'))
            return view('manage.dashboardmanager');
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
            return abort(403);

    }
}
