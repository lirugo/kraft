<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function showlogin(){
        return view('admin.login');
    }

    public function login(Request $request){
        //Validate
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        //Attempt to log the user in
        $user = User::where('email', '=', $request->email)->first();
        if(!empty($user)){
            if($user->hasRole('administrator') || $user->hasRole('superadministrator')){
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                    // Authentication passed...
                    return redirect()->intended('admin');
                }
            }
        }
        //If unseccess redirect back
        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect('/admin/login');
    }
}
