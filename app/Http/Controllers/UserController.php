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

        // Update data
        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->patronymic = $request->patronymic;
        $user->email = $request->email;

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
