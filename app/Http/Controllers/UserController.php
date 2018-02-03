<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;

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
            'surname' => 'required|max:255',
            'patronymic' => 'required|max:255',
            'email' => 'required|email|max:255',
            'dateofbirth' => 'required|date|max:255',
            'sex' => 'required|max:255',
            'phone' => 'required|max:255',
        ]);

        // Update data
        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patronymic = $request->patronymic;
        $user->email = $request->email;
        $user->dateofbirth = $request->dateofbirth;
        $user->sex = $request->sex;
        $user->phone = $request->phone;

        $user->save();

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        // redirect back
        return view('users.profile', ['user' => Auth::user()]);
    }
}
