<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use App\Facades\Authy;
use App\Role;
use App\Services\Authy\Exceptions\RegistrationFailedException;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Session;
use Image;

class RegisterCompanyController extends Controller
{
    public function getRegisterCompany(){
        return view('auth.registercompany');
    }

    public function createRegisterCompany(Request $request){
        //Validate
        $this->validate($request,[
            //Validate company profile
            'companyname' => 'required|unique:companies|max:255',
            'city' => 'required|max:255',
            'street' => 'required|max:255',
            'house' => 'required|integer',
            'phonecompany' => 'required|regex:/(\+38)[ 0-9]{10}/',

            'bank' => 'required|max:255',
            'mfo' => 'required|max:255',
            'settlementaccount' => 'required|max:255',
            'okpo' => 'required|max:255',

            'lawcity' => 'required|max:255',
            'lawstreet' => 'required|max:255',
            'lawhouse' => 'required|integer',
            'lawphone' => 'required|regex:/(\+38)[ 0-9]{10}/',

            'site' => 'active_url',
            'social1' => 'active_url',
            'social2' => 'active_url',
            'social3' => 'active_url',

            //Validate user profile
            'name' => 'required|max:255',
            'dateofbirth' => 'required|max:255',
            'sex' => 'required|max:255',
            'phone' => 'required|unique:users,phone|regex:/(\+38)[ 0-9]{10}/',
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
        //Add manager id
        $managers = User::whereHas('roles', function($q)            {
            $q->where('name', 'manager');
        })->get();
        foreach ($managers as $manager){
            if($manager->regionname == $company->regionname)
                $company->rmid = $manager->id;
        }
        $company->city = $request->city;
        $company->street = $request->street;
        $company->house = $request->house;
        $company->housing = $request->housing;
        $company->office = $request->office;
        $company->smartphone = $request->smartphone;
        $company->phone = $request->phonecompany;
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

        //Social
        $company->site = $request->site;
        $company->social1 = $request->social1;
        $company->social2 = $request->social2;
        $company->social3 = $request->social3;
        $company->social4 = $request->social4;
        $company->social5 = $request->social5;

        //Save user
        $user->name = $request->name;
        $user->dateofbirth = $request->dateofbirth;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->company = $company->companyname;
        $user->region = $request->region;
        $user->regionname = $regionname;

        // IF have avatar save
        if(!empty($request->avatar))$user->avatar = $request->avatar;
        $user->save();
        $company->user_id = $user->id;
        $company->save();

        //EndSave user

        //AttachRole designer/arch for new user
        $distributor = Role::where('name', 'distributor')->first();
        $user->attachRole($distributor);

        //Set authy ID
        try{
            $authyId = Authy::registerUser($user);
            $user->authy_id = $authyId;
            $user->save();
        }catch (\Exception $e){
            $user->delete();
            $company->delete();
            Session::flash('warning', 'Email or phone exist or not valid');
            return redirect()->back();
        }

        //Set Flash message
        Session::flash('success', 'Company and distributor was successfully created.');
        //Redirect
        return view('auth.complete');

    }
}
