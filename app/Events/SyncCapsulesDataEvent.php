<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SyncCapsulesDataEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $subject;
    public $msg;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($subject, $msg)
    {
        // Delivers the message and subject parts of the e-mail to the listener
        $this->subject = $subject;
        $this->msg = $msg;
    }
}
