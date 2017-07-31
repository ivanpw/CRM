<?php


namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queueuse\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\User;
class Newuser
{
	use Dispatchable, InteractsWithSockets, SerializesModels;
	public $user;





	@return



	public function __construct(User $user)
{
	$this->user = $user;
}





@return

public function BroadcastOn()
{
	return new PrivateChannel('channel-name');
}

}