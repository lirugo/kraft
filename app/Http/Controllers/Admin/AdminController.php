<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function logout(){
        Auth::logout();
        return redirect('/admin/login');
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
            'phone' => 'required|max:255',
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
        // IF have avatar save
        if(isset($request->avatar))$user->avatar = $request->avatar;
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
}
