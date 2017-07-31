<?

namespace App\Listeners;

use App\Events\NewUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\NewUserWelcome;
class SendWelcomeEmail
{



	@return

	public function __construct()
	{

	}






	@param
	@return

	public function handle(NewUser $event)
	{
			Mail::to($event->$user->email)->send(new NewUserWelcome($event-user));
	}
}