<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TextEvent implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $_time;

    public function __construct()
    {
        $this->_time = microtime();
    }

    public function broadcastOn()
    {
        return ['service'];
    }

    public function broadcastWith(){
    	return [
    		'time' => microtime(),
		    'version' => 0.1
	    ];
    }

	public function broadcastAs(){
		return 'microtime';
	}
}
