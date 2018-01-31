<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Image;

class RegisterCompanyController extends Controller
{
    //

    public function getRegisterCompany(){
        return view('auth.registercompany');
    }

    public function createRegisterCompany(Request $request){
        //Validate
        $this->validate($request,[
            'companyname' => 'required|max:255',
            'city' => 'required|max:255',
            'street' => 'required|max:255',
            'house' => 'required|integer',
            'housing' => 'required|max:5',
            'office' => 'required|max:5',
            'smartphone' => 'required|max:20',
            'phone' => 'required|max:20',
            'fax' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
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


        // Save data to db
        $company = new Company;

        $company->companyname = $request->companyname;
        $company->city = $request->city;
        $company->street = $request->street;
        $company->house = $request->house;
        $company->housing = $request->housing;
        $company->office = $request->office;
        $company->smartphone = $request->smartphone;
        $company->phone = $request->phone;
        $company->fax = $request->fax;
        $company->email = $request->email;
        $company->bank = $request->bank;
        $company->mfo = $request->mfo;
        $company->settlementaccount = $request->settlementaccount;
        $company->okpo = $request->okpo;
        $company->lawcity = $request->lawcity;
        $company->lawstreet = $request->lawstreet;
        $company->lawhouse = $request->lawhouse;
        $company->lawhousing = $request->lawhousing;
        $company->lawoffice = $request->lawoffice;
        $company->lawphone = $request->lawphone;
        $company->lawfax = $request->lawfax;

        // IF have doc then save
        // Handle the user upload of doc
        if($request->hasFile('scandoc1')){
            $scandoc1 = $request->file('scandoc1');
            $filename = time().'.'.$scandoc1->getClientOriginalExtension();
            Image::make($scandoc1)->resize(300,300)->save(public_path('/uploads/scandocs/scandoc1/'.$filename));
            $company->scandoc1 = $filename;
        }
        if($request->hasFile('scandoc2')){
            $scandoc2 = $request->file('scandoc2');
            $filename = time().'.'.$scandoc2->getClientOriginalExtension();
            Image::make($scandoc2)->resize(300,300)->save(public_path('/uploads/scandocs/scandoc2/'.$filename));
            $company->scandoc2 = $filename;
        }
        if($request->hasFile('scandoc3')){
            $scandoc3 = $request->file('scandoc3');
            $filename = time().'.'.$scandoc3->getClientOriginalExtension();
            Image::make($scandoc3)->resize(300,300)->save(public_path('/uploads/scandocs/scandoc3/'.$filename));
            $company->scandoc3 = $filename;
        }
        if($request->hasFile('scandoc4')){
            $scandoc4 = $request->file('scandoc4');
            $filename = time().'.'.$scandoc4->getClientOriginalExtension();
            Image::make($scandoc4)->resize(300,300)->save(public_path('/uploads/scandocs/scandoc4/'.$filename));
            $company->scandoc4 = $filename;
        }
        if($request->hasFile('scandoc5')){
            $scandoc5 = $request->file('scandoc5');
            $filename = time().'.'.$scandoc5->getClientOriginalExtension();
            Image::make($scandoc5)->resize(300,300)->save(public_path('/uploads/scandocs/scandoc5/'.$filename));
            $company->scandoc5 = $filename;
        }

        //$company->save();


        Session::flash('success', 'Step 2 - Register user');
        //Redirect
        return view('auth.registeruser')->with('company', $company);
    }
}
