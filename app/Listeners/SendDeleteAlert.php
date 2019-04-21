<?php

namespace App\Listeners;

use App\Events\DeleteUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Alert;

class SendDeleteAlert
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
     * @param  DeleteUser  $event
     * @return void
     */
    public function handle(DeleteUser $event)
    {
        Alert::error('User '.$event->user->name.' deleted.', 'This action can not be reversed.');
    }
}
