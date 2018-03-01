<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanyChange;
use App\Role;
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
        $companychange = Company::where('email', $user->email)->firstOrFail();

        if($user->hasRole('distributor'))
            return view('company.profile')->with('company', $companychange);
        else
            return abort(403);
    }

    public function getcompanyusers(){
        $user = Auth::user();
        $users = User::all()->where('company', '=' , $user->company);
        $companychange = Company::where('email', $user->email)->firstOrFail();
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
            'phone' => 'required|regex:/(\+38)[ 0-9]{10}/',
            'bank' => 'required|max:255',
            'mfo' => 'required|max:255',
            'settlementaccount' => 'required|max:255',
            'okpo' => 'required|max:255',
            'lawcity' => 'required|max:255',
            'lawstreet' => 'required|max:255',
            'lawhouse' => 'required|integer',
            'lawphone' => 'required|regex:/(\+38)[ 0-9]{10}/',
        ]);

        // Save data to db
        $count = 0;
        $company = Company::find($request->id);
        $companychange = new CompanyChange;
        $companychange->company_id = $request->id;
        $companychange->companyname = $request->companyname;
        $companychange->region = $company->region;
        $companychange->regionname = $company->regionname;
        $companychange->email = $request->email;
        if($request->city != $company->city) $count++; $companychange->city = $request->city;
        if($request->street != $company->street) $count++;$companychange->street = $request->street;
        if($request->house != $company->house) $count++; $companychange->house = $request->house;
        if($request->housing != $company->housing)$count++; $companychange->housing = $request->housing;
        if($request->office != $company->office) $count++; $companychange->office = $request->office;
        if($request->smartphone != $company->smartphone) $count++; $companychange->smartphone = $request->smartphone;
        if($request->phone != $company->phone)$count++; $companychange->phone = $request->phone;
        if($request->fax != $company->fax) $count++; $companychange->fax = $request->fax;
        if($request->bank != $company->bank) $count++; $companychange->bank = $request->bank;
        if($request->mfo != $company->mfo) $count++; $companychange->mfo = $request->mfo;
        if($request->settlementaccount != $company->settlementaccount) $count++; $companychange->settlementaccount = $request->settlementaccount;
        if($request->okpo != $company->okpo) $count++; $companychange->okpo = $request->okpo;
        if($request->lawcity != $company->lawcity) $count++; $companychange->lawcity = $request->lawcity;
        if($request->lawstreet != $company->lawstreet) $count++; $companychange->lawstreet = $request->lawstreet;
        if($request->lawhouse != $company->lawhouse) $count++; $companychange->lawhouse = $request->lawhouse;
        if($request->lawhousing != $company->lawhousing) $count++; $companychange->lawhousing = $request->lawhousing;
        if($request->lawoffice != $company->lawoffice) $count++; $companychange->lawoffice = $request->lawoffice;
        if($request->lawphone != $company->lawphone) $count++; $companychange->lawphone = $request->lawphone;
        if($request->lawfax != $company->lawfax) $count++; $companychange->lawfax = $request->lawfax;

        $companychange->count = $count;

        //if($companychange->site != $company->site){$companychange->site = $request->site; $count++; };
        //if($companychange->social1 != $company->social1){$companychange->social1 = $request->social1; $count++; };
        //if($companychange->social2 != $company->social2){$companychange->social2 = $request->social2; $count++; };
        //if($companychange->social3 != $company->social3){$companychange->social3 = $request->social3; $count++; };
        //if($companychange->social4 != $company->social4){$companychange->social4 = $request->social4; $count++; };
        //if($companychange->social5 != $company->social5){$companychange->social5 = $request->social5; $count++; };

        $companychange->save();

        //Set Flash message
        if($count == 0)
            Session::flash('warning', 'You dont change any data.');
        else
            Session::flash('success', 'Your changes have been sent on moderation.'.$count);
        //Redirect
        return redirect(route('manage.dashboard'));
    }

    public function createuser(){
        return view('company.createuser');
    }

    public function createuserpost(Request $request){
        $creator = Auth::User();
        //Validate
        $this->validate($request,[
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'patronymic' => 'required|max:255',
            'dateofbirth' => 'required|max:255',
            'sex' => 'required|max:255',
            'phone' => 'required|regex:/(\+38)[ 0-9]{10}/',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Save data to db
        $user = new User;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patronymic = $request->patronymic;
        $user->dateofbirth = $request->dateofbirth;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->regionname = $creator->regionname;
        $user->company = $creator->company;
        $user->password = bcrypt($request->password);
        // IF have avatar save
        if(!empty($request->avatar))$user->avatar = $request->avatar;
        //Save user
        $user->save();
        //AttachRole designer/arch for new user
        $worker = Role::where('name', 'worker')->first();
        $user->attachRole($worker);

        //Flash message
        Session::flash('success', 'User in your company was successfully created.');
        //Redirect
        return redirect(route('manage'));
    }
}
