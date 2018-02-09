<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use Auth;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile(){
        $user = Auth::user();
        $company = Company::where('email', $user->email)->firstOrFail();

        if($user->hasRole('distributor'))
            return view('company.profile')->with('company', $company);
        else
            return abort(403);
    }
}
