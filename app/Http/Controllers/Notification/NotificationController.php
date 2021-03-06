<?php

namespace App\Http\Controllers\Notification;

use App\Events\NotificationArrived;
use App\Notification;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index(){
        //Save notification in database
        $notif = new Notification();
        $notif->user_id_from = 1;
        $notif->user_id_to = 5;
        $notif->title = "some small text for title";
        $notif->body = "Hi i send to u new message, some small text for body notification";
        $notif->save();

        //Create collection for sending in Event
        $data = new Collection();
        $data->put('notif', $notif);
        $data->put('user_from', User::find($notif->user_id_from));
        $data->put('user_to', User::find($notif->user_id_to));

        //Announce about new event
        event( new NotificationArrived($data, $notif->user_id_to));

        //Return status
        return ['status' => 'OK'];
    }

    public function getNotif(){
        //Set collection
        $data = new Collection();
        $notifs = Notification::where('read', false)->where('user_id_to', Auth::user()->id)->get();
        foreach ($notifs as $notif)
        {
            $notif->user_from_avatar = User::find($notif->user_id_from)->avatar;
        }
        //Send data to view
        return ['status' => 'OK', 'data' => $notifs];
    }

    public function delNotif(){
        $notifs = Notification::where('user_id_to', Auth::user()->id)->get();
        foreach ($notifs as $notif) {
            $notif->read = true;
            $notif->save();
        }

        return ['status' => 'OK'];
    }
}
