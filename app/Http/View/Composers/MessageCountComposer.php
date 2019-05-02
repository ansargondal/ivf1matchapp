<?php

namespace App\Http\View\Composers;

use App\Models\Backend\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MessageCountComposer
{

    public function compose(View $view)
    {
        //get authenticated user id
        $user_id = Auth::user()->id;


        //load all the sent and received messages with filters
        $messages = Message::where('status', 'approved')
            ->where(function ($query) use ($user_id) {

                $query->where('receiver_id', $user_id);
                $query->orWhere('sender_id', $user_id);

            })->get();

        //all messages count 
        $total_messages = $messages->count();

        //false = 0 means unread
        //true = 1 means read
        $read_messages = $messages->where('is_read', true)->count();
        $unread_messages = $messages->where('is_read', false)->count();


        $message_count['total'] = sprintf('%02d', $total_messages);
        $message_count['read'] = sprintf('%02d', $read_messages);
        $message_count['unread'] = sprintf('%02d', $unread_messages);


        $view->with('message_count', (object)$message_count);
    }
}