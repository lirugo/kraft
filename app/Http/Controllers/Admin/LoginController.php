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
        $this->middleware('guest:admin');
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
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Authentication passed...
            return redirect()->intended('admin');
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
