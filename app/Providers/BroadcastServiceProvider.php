<?php

namespace App\Providers;

use App\Object;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        /*
         * Authenticate the user's personal channel...
         */
//        Broadcast::channel('App.User.{userId}', function ($user, $userId) {
//            return (int) $user->id === (int) $userId;
//        });
        Broadcast::channel('chatroom', function ($user) {
            return $user;
        });
        Broadcast::channel('chatobject.{objectId}', function ($user, $objectId) {
            $object = Object::find($objectId);
            return $user->id == $object->rmid || $user->id == $object->creatorid;
        });

        Broadcast::channel('notification-arrived', function () {
           return false;
        });
    }
}
