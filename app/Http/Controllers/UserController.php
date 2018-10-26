<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Image;
use App\User;
use Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        return view('users.profile', ['user' => Auth::user()]);
    }

    public function profile_update(Request $request)
    {
        // Validate data
        $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'dateofbirth' => 'required|date:"yyyy-mm-dd"|date',
            'phone' => 'required|numeric',
        ]);

        // Update data
        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->dateofbirth = $request->dateofbirth;
        $user->phone = $request->phone;

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));

            $user = Auth::user();
            $user->avatar = $filename;
        }

        //Save user
        $user->save();

        //redirect back
        Session::flash('success', 'User profile was successfully updated.');
        return view('users.profile', ['user' => Auth::user()]);
    }

    public function updatePassword(Request $request){
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->withErrors("Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current_password'), $request->get('password')) == 0){
            //Current password and new password are same
            return redirect()->back()->withErrors("New Password cannot be same as your current password. Please choose a different password.");
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('password'));
        $user->save();
        Session::flash("success", "Password changed successfully !");
        return redirect()->back();
    }
}
