<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Models\AbsenceType;
use App\Models\UserLeave;
use App\Repositories\UserLeaveRepository;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserLeaveListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
	    $userId = $event->userId;
	    $absence_type = AbsenceType::all();
	    foreach ($absence_type as $item) {
		    $userCreate = new UserLeave();
		    $userCreate->user_id = $userId;
		    $userCreate->absence_type_id = $item->id;
		    $userCreate->year_id = 1;
		    $userCreate->total_leave = 0;
		    $userCreate->taken_leave = 0;
		    $userCreate->balance_leave = 0;
		    $userCreate->save();
	    }
    }
}
