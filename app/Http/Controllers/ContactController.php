<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request){
        $user = User::find(1);
        $user->name = $request->theme;
        $user->save();
        return back();
    }
}
