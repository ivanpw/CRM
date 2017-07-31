<?php


namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
class NewUserWelcome extends Mailable
{
	use Queueable, SerializesModels;


public user;


	@return


	public function __construct(User $user)
	{
			this->user = $user;
	}


	@return

public function build()

{
	return $this->view('emails.newuserwelcome');
}

}