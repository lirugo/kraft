<?php

namespace App\Http\Controllers\Chat;

use App\Events\MsgObjectPosted;
use App\MsgObject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ObjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function chat(){
        return view('object.chat');
    }

    public function messages(){
        return MsgObject::with('user')->get();
    }

    public function postmessages(){
        $user = Auth::user();

        $message = $user->msgsobject()->create([
            'message' => request()->get('message')
        ]);

        //Announce that a new message has been posted
        broadcast(new MsgObjectPosted($message, $user))->toOthers();

        return ['status' => 'OK'];
    }
}
