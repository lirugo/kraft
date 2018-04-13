<?php

namespace App\Http\Controllers\Chat;

use App\Events\MsgObjectPosted;
use App\MsgObject;
use App\Object;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ObjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function chat($objectId){
        //Deny access for other user
        $object = Object::find($objectId);
        if($object->rmid != Auth::user()->id && $object->creatorid != Auth::user()->id)
            return redirect()->to('news');
        else
            return view('object.chat')->with('object_id', $objectId);
    }

    public function messages($objectId){
        //Deny access for other user
        $object = Object::find($objectId);
        if($object->rmid != Auth::user()->id && $object->creatorid != Auth::user()->id)
            return redirect()->to('news');
        else
        return MsgObject::with('user')->where('object_id', $objectId)->get();
    }

    public function postmessages(Request $request){
        $objectId = $request->objectId;
        //Deny access for other user
        $object = Object::find($objectId);
        if($object->rmid != Auth::user()->id && $object->creatorid != Auth::user()->id)
            return redirect()->to('news');

        $user = Auth::user();
        $object = Object::find($objectId);
        $manager_id = $object->rmid;

        //Persist data in db
        $message = $user->msgsobject()->create([
            'message' => $request->message,
            'object_id' => $objectId,
            'manager_id' => $manager_id
        ]);

        //Announce that a new message has been posted
        broadcast(new MsgObjectPosted($message, $user, $objectId))->toOthers();

        return ['status' => 'OK'];
    }
}
