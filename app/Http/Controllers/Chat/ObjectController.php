<?php

namespace App\Http\Controllers\Chat;

use App\Events\MsgObjectPosted;
use App\MsgObject;
use App\Notification;
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
        if(Auth::user()->id == $object->rmid)
            $user_id_to = $object->creatorid;
        else $user_id_to = $object->rmid;

        //Persist data in db history message
        $message = new MsgObject();
            $message->message = $request->message;
            $message->object_id = $objectId;
            $message->user_id_from = $user->id;
            $message->user_id_to = $user_id_to;
        $message->save();

        //Persist data in notification table
        $notif = new Notification();
        $notif->user_id_from = $user->id;
        $notif->user_id_to = $user_id_to;
        $notif->object_id = $objectId;
        $notif->title = Auth::user()->surname." ".Auth::user()->name." Sent mew message.";
        $notif->body = $request->message;
        $notif->save();

        //Announce that a new message has been posted
        broadcast(new MsgObjectPosted($message, $user, $objectId))->toOthers();

        return ['status' => 'OK'];
//        return $request;
    }
}
