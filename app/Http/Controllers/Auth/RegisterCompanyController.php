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

        // IF have docs then save
        if($request->hasFile('scandoc1')){
            $scandoc1 = $request->file('scandoc1');
            $filename = time().'.'.$scandoc1->getClientOriginalExtension();
            $path = $request->scandoc1->storeAs('scandocs/scandoc1', $filename, 'public_uploads');
            Storage::disk('public_uploads')->put($path, file_get_contents($request->file('scandoc1')));
            $company->scandoc1 = $filename;
        }
        if($request->hasFile('scandoc2')){
            $scandoc2 = $request->file('scandoc2');
            $filename = time().'.'.$scandoc2->getClientOriginalExtension();
            $path = $request->scandoc1->storeAs('scandocs/scandoc2', $filename, 'public_uploads');
            Storage::disk('public_uploads')->put($path, file_get_contents($request->file('scandoc2')));
            $company->scandoc2 = $filename;
        }
        if($request->hasFile('scandoc3')){
            $scandoc3 = $request->file('scandoc3');
            $filename = time().'.'.$scandoc3->getClientOriginalExtension();
            $path = $request->scandoc3->storeAs('scandocs/scandoc3', $filename, 'public_uploads');
            Storage::disk('public_uploads')->put($path, file_get_contents($request->file('scandoc3')));
            $company->scandoc3 = $filename;
        }
        if($request->hasFile('scandoc4')){
            $scandoc4 = $request->file('scandoc4');
            $filename = time().'.'.$scandoc4->getClientOriginalExtension();
            $path = $request->scandoc4->storeAs('scandocs/scandoc4', $filename, 'public_uploads');
            Storage::disk('public_uploads')->put($path, file_get_contents($request->file('scandoc4')));
            $company->scandoc4 = $filename;
        }
        if($request->hasFile('scandoc5')){
            $scandoc5 = $request->file('scandoc5');
            $filename = time().'.'.$scandoc5->getClientOriginalExtension();
            $path = $request->scandoc5->storeAs('scandocs/scandoc5', $filename, 'public_uploads');
            Storage::disk('public_uploads')->put($path, file_get_contents($request->file('scandoc5')));
            $company->scandoc5 = $filename;
        }



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

        // IF have avatar save
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
            $user->avatar = $filename;
        }

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
