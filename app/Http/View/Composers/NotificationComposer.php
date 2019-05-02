<?php

namespace App\Http\View\Composers;

use App\Models\Backend\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class NotificationComposer
{
    public function compose(View $view)
    {
        $user_id = Auth::user()->id;

        //load all the sent and received messages with filters
        $messages = Message::where('status', 'approved')
            ->where('is_read', false)
            ->where(function ($query) use ($user_id) {

                $query->where('receiver_id', $user_id);
                $query->orWhere('sender_id', $user_id);

            })->with('sender')->limit(5)->get();

        $view->with('messages', $messages);
    }
}