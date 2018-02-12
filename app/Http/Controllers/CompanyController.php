<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanyChange;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Session;

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

    public function getcompanyusers(){
        $user = Auth::user();
        $users = User::all()->where('company', '=' , $user->company);
        $company = Company::where('email', $user->email)->firstOrFail();
            return view('company.users')->with('users', $users);
    }

    public function changeprofile(Request $request){
        //Validate
        $this->validate($request,[
            //Validate company profile
            'companyname' => 'required|max:255',
            'city' => 'required|max:255',
            'street' => 'required|max:255',
            'house' => 'required|integer',
            'housing' => 'required|max:5',
            'office' => 'required|max:5',
            'smartphone' => 'required|max:20',
            'phone' => 'required|max:20',
            'fax' => 'required|max:255',
            'bank' => 'required|max:255',
            'mfo' => 'required|max:255',
            'settlementaccount' => 'required|max:255',
            'okpo' => 'required|max:255',

            'lawcity' => 'required|max:255',
            'lawstreet' => 'required|max:255',
            'lawhouse' => 'required|integer',
            'lawhousing' => 'required|max:5',
            'lawoffice' => 'required|max:5',
            'lawphone' => 'required|max:255',
            'lawfax' => 'required|max:255',
        ]);

        $count = 0;
        // Save data to db
        $companychange = new CompanyChange;
        $company = Company::where('email', $request->email)->firstOrFail();

        $companychange->companyid = $request->id;
        $companychange->companyname = $request->companyname;

        if($company->city == $request->city);
        else { $companychange->city = $request->city; $count++; }
        if($company->street == $request->street);
        else { $companychange->street = $request->street; $count++; }
        if($company->house == $request->house);
        else { $companychange->house = $request->house; $count++; }
        if($company->housing == $request->housing);
        else { $companychange->housing = $request->housing; $count++; }
        if($company->office == $request->office);
        else { $companychange->office = $request->office; $count++; }
        if($company->smartphone == $request->smartphone);
        else { $companychange->smartphone = $request->smartphone; $count++; }
        if($company->phone == $request->phone);
        else { $companychange->phone = $request->phone; $count++; }
        if($company->fax == $request->fax);
        else { $companychange->fax = $request->fax; $count++; }
        if($company->bank == $request->bank);
        else { $companychange->bank = $request->bank; $count++; }
        if($company->mfo == $request->mfo);
        else { $companychange->mfo = $request->mfo; $count++; }
        if($company->settlementaccount == $request->settlementaccount);
        else { $companychange->settlementaccount = $request->settlementaccount; $count++; }
        if($company->okpo == $request->okpo);
        else { $companychange->okpo = $request->okpo; $count++; }
        if($company->lawcity == $request->lawcity);
        else { $companychange->lawcity = $request->lawcity; $count++; }
        if($company->lawstreet == $request->lawstreet);
        else { $companychange->lawstreet = $request->lawstreet; $count++; }
        if($company->lawhouse == $request->lawhouse);
        else { $companychange->lawhouse = $request->lawhouse; $count++; }
        if($company->lawhousing == $request->lawhousing);
        else { $companychange->lawhousing = $request->lawhousing; $count++; }
        if($company->lawoffice == $request->lawoffice);
        else { $companychange->lawoffice = $request->lawoffice; $count++; }
        if($company->lawphone == $request->lawphone);
        else { $companychange->lawphone = $request->lawphone; $count++; }
        if($company->lawfax == $request->lawfax);
        else { $companychange->lawfax = $request->lawfax; $count++; }

        $companychange->save();

        //Set Flash message
        if($count != 0)
            Session::flash('success', 'Your changes have been sent on moderation. '.$count);
        else
            Session::flash('success', 'You don\'t change any data');
        //Redirect
        return redirect(route('manage.dashboard'));
    }
}
