<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Models\AbsenceType;
use App\Models\UserLeave;
use App\Models\Year;
use App\Repositories\UserLeaveRepository;
use Carbon\Carbon;
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
	    $year = Year::where('slug',Carbon::now()->year)->first();
	    foreach ($absence_type as $item) {
		    $userCreate = new UserLeave();
		    $userCreate->user_id = $userId;
		    $userCreate->absence_type_id = $item->id;
		    $userCreate->year_id = $year->id;
		    $userCreate->total_leave = $item->total;
		    $userCreate->taken_leave = 0;
		    $userCreate->balance_leave = $item->total;
		    $userCreate->save();
	    }
    }
}
