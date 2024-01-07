<?php

namespace App\Listeners\Frontend\UserProfileUpdated;

use App\Events\Frontend\UserProfileUpdated;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserProfileUpdatedUserUpdate implements ShouldQueue
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
     * @return void
     */
    public function handle(UserProfileUpdated $event)
    {
        $user_profile = $event->user_profile;

        $user = User::where('id', '=', $user_profile->user_id)->first();

        $user->first_name = $user_profile->first_name;
        $user->last_name = $user_profile->last_name;


        $user->save();
    }
}
