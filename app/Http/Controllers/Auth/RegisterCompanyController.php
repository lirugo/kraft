<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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

            //Validate user profile
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'patronymic' => 'required|max:255',
            'dateofbirth' => 'required|max:255',
            'sex' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            ]);

        // Save data to db
        $company = new Company;
        $user = new User;

        $company->companyname = $request->companyname;
        //Region
        if($request->region[0] == 1)
            $regionname = "center";
        elseif($request->region[0] == 2)
            $regionname = "east";
        elseif($request->region[0] == 3)
            $regionname = "south";
        elseif($request->region[0] == 4)
            $regionname = "west";

        $company->region = $request->region;
        $company->regionname = $regionname;
        //EndRegion
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

        // IF have scan docs then save
        if(isset($request->scans[0]))$company->scandoc1 = $request->scans[0];
        if(isset($request->scans[1]))$company->scandoc2 = $request->scans[1];
        if(isset($request->scans[2]))$company->scandoc3 = $request->scans[2];
        if(isset($request->scans[3]))$company->scandoc4 = $request->scans[3];
        if(isset($request->scans[4])) $company->scandoc5 = $request->scans[4];

        //Save user
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patronymic = $request->patronymic;
        $user->dateofbirth = $request->dateofbirth;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->company = $company->companyname;
        $user->region = $request->region;
        $user->regionname = $regionname;

        // IF have avatar save
        if(isset($request->avatar))$user->avatar = $request->avatar;

        $company->save();
        $user->save();
        //EndSave user

        //AttachRole designer/arch for new user
        $distributor = Role::where('name', 'distributor')->first();
        $user->attachRole($distributor);

        //Set Flash message
        Session::flash('success', 'Company and distributor was successfully created.');
        //Redirect
        return view('auth.complete');

    }
}
