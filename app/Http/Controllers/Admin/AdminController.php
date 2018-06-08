<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Object;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function createuser(){
        return view('admin.users.create');
    }

    public function createuserpost(Request $request){
        //Validate
        $this->validate($request,[
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'patronymic' => 'required|max:255',
            'dateofbirth' => 'required|max:255',
            'sex' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|max:255|unique:users',
            'role' => 'required',
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
        $user->password = bcrypt($request->password);
        $user->two_factor_type = 'off';
        $user->active = true;
        // IF have avatar save
        if(!empty($request->avatar))$user->avatar = $request->avatar;
        $user->regionname = $request->regionname;
        //Save user
        $user->save();
        //AttachRole designer/arch for new user
        $role = Role::where('name', $request->role)->first();
        $user->attachRole($role);

        //Flash message
        Session::flash('success', $role->name.' was successfully created.');
        //Redirect
        return redirect('admin');
    }

    public function admin(){
        return view('admin.manage.dashboard');
    }

    public function settings(){
        return view('admin.settings.settings');
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin/login');
    }

    public function showusers(){
        $users = User::orderBy('id','desc')->paginate(6);
        return view('admin.users.show', ['users' => $users]);
    }

    public function activateuser(Request $request, $id){
        $user = User::find($id);
        $user->active == true ? $user->active = false : $user->active = true;
        $user->save();
        Session::flash('success', 'User status was changed.');
        return redirect()->back();
    }

    public function deleteuser(Request $request, $id){
        $user = User::find($id);
        if($user->hasRole('distributor'))
        {
            $company = Company::all()->where('email', '=', $user->email)->first();
            $objects = Object::all()->where('companyid', '=', $company->id);
            foreach ($objects as $object)
                if(!empty($object))$object->delete();
            $users = User::all();
            foreach ($users as $u)
                if($u->company == $company->companyname)
                    $u->delete();
            $company->delete();
        }
        $user->delete();

        Session::flash('success', 'User was deleted.');
        return redirect()->back();
    }
}
