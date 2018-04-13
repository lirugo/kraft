<?php

namespace App\Events;

use App\MsgObject;
use App\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MsgObjectPosted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $user;
    public $objectId;

    /**
     * Create a new event instance.
     *
     * @param MsgObject $message
     * @param User $user
     * @param int $objectId
     */
    public function __construct(MsgObject $message, User $user, $objectId)
    {
        $this->message = $message;
        $this->user = $user;
        $this->objectId = $objectId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chatobject.'.$this->objectId);
    }
}
