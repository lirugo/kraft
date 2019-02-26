<?php

namespace App\Http\Controllers\TopManager;

use App\CalcHistory;
use App\Company;
use App\CompanyChange;
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
            'companyOld' => 'required',
            'company' => 'required',
            'password' => 'min:8|confirmed',
            'password_confirmation' => 'min:8',
        ]);

        //Change Password
        if($request->password) {
            $user = User::find($request->userId);
            $user->password = bcrypt($request->get('password'));
            $user->save();
        }

        //Change company
        $company = Company::where('companyname', $request->companyOld)->first();
        $company->companyname = $request->company;
        $company->save();

        //Change users
        $users = User::where('company', $request->companyOld)->get();
        foreach ($users as $user){
            $user->company = $request->company;
            $user->save();
        }

        //Change company change
        $cH = CompanyChange::where('companyname', $request->companyOld)->get();
        foreach ($cH as $c){
            $c->companyname = $request->company;
            $c->save();
        }

       Session::flash('success', 'Данные обновленны');
       return back();

    }
}
