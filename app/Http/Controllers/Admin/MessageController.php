<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Backend\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('admin.messages', compact('user'));
    }

    public function show($id)
    {
        return response()->json(Message::whereId($id)->with('sender')->get(), 200);
    }

    public function markAsRead($id)
    {
        //TODO: It will mark the message as read for all the users
        $message = Message::find($id);

        $message->is_read = true;

        return $message->save();
    }

    public function store(Request $request)
    {
        $sender_id = Auth::user()->id;
        $receiver_id = $request->receiver_id;

        $message = new Message();
        $message->sender_id = $sender_id;
        $message->receiver_id = $receiver_id;
        $message->status = 'pending';
        $message->subject = $request->subject;
        $message->message = $request->message;

        $message->save();

        return response()->json(['error' => false,
            'message' => 'You message has been sent to donor. He will reply you as soon as the admin will approve it. ']);
    }

    public function updateStatus(Request $request)
    {
        $pathInfo = request()->getPathInfo();

        $id = explode("/", $pathInfo)[3];

        $message = Message::find($id);

        $message->status = $request->status;

        $message->save();

        return response()->json(['error' => false,
            'message' => 'Message status has been changed to ' . $request->status . '!']);

    }


    public function destroy($id)
    {
        try {
//            User::whereHas('roles')->whereId($id)->delete();
            Message::whereid($id)->delete();

            return response()->json(['error' => false, 'message' => 'Message has been deleted.']);

        } catch (\Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }

    /**
     * @param Request $request
     * @return json data requested by AJAX call for
     * message data table
     * @throws \Exception
     */
    public function messagesDTData(Request $request)
    {
        $messages = '';
        $filter_props['col_name'] = 'is_read';
        $filter_props['filter'] = '';

        if ($this->is_admin()) {
            $messages = $this->get_admin_messages($request);
        }

        if ($this->is_donor() || $this->is_recipient()) {

            $messages = $this->get_donor_or_recipient_messages($request);
        }

        return datatables($messages)
            ->setRowClass(function ($messages) {
                return $messages->is_read ? 'read' : 'unread';
            })
            ->addColumn('sender_id', function ($messages) {
                return $messages->sender->id;
            })
            ->addColumn('from', function ($messages) {
                return $messages->sender->fullName;
            })
            ->addColumn('to', function ($messages) {
                return $messages->receiver->fullName;
            })
            ->addColumn('created_at', function ($messages) {
                return $messages->created_at->format('M, d Y');
            })
            ->addColumn('subject', function ($messages) {
                return str_limit($messages->subject, 20, '...');
            })
            ->addColumn('message', function ($messages) {
                return str_limit($messages->message, 30, '...');
            })
            ->addColumn('status', function ($messages) {

                $btnClass = $this->getMatchedClass($messages->status);

                //if has any of this role
                $role = Auth::user()->hasAnyRole(['Recipient', 'Donor']);

                //if logged is user is Donor or Recipient
                if ($role) {
                    return '<td><span class="badge ' . $btnClass . '">' . ucfirst($messages->status) . '</span></td>';
                }

                return '<div class="dropdown">
                        <button data-url="' . route('admin.messages.status', $messages->id) . '" class="btn '
                    . $btnClass . ' dropdown-toggle border-0 py-0 px-2 font-weight-light" style="font-size: 1em;"
                            type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ' . ucfirst($messages->status) . '
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Approved</a>
                        <a class="dropdown-item" href="#">Pending</a>
                        <a class="dropdown-item" href="#">Rejected</a>
                    </div>
                   </div>';
            })
            ->addColumn('action', function ($messages) {

                $is_read_class = $messages->is_read ? 'fa-envelope-open' : 'fa-envelope';

                return '<a href="#" data-toggle="tooltip" class="action js-btn-reply" data-placement="top"
                        title="Reply"> <i class="fa fa-reply" aria-hidden="true"></i> </a>

                       <a href="' . route('admin.messages.update', $messages->id) . '" class="action js-btn-read" data-toggle="tooltip"
                            data-placement="top" title="Read Message"><i class="fa ' . $is_read_class . '" aria-hidden="true"></i></a>

                            <a href="' . route('admin.messages.destroy', $messages->id) . '" class="action js-btn-delete"
                            data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a>';

            })->rawColumns(['status', 'action', 'receiver_id'])
            ->make(true);
    }

    public function getMatchedClass($status)
    {
        switch (strtolower($status)) {
            case 'approved':
                return 'btn-success';
                break;
            case 'pending':
                return 'btn-info';
            case 'rejected':
                return ' ';
                break;
            default:
                break;
        }
    }

    /**
     * @param $filter
     * @return mixed
     * @description returns column name based on the
     * query string value's data type and filter value as well
     */
    private function filter($filter)
    {
        //get filter value
        $filter_props['filter'] = trim($filter);

        //by default filter by id
        $filter_props['col_name'] = 'id';

        //if filter value is not numeric
        //filter by message read status column
        if (!is_numeric($filter_props['filter'])) {

            //get filter value from query string
            $filter_props['col_name'] = 'is_read';

            //boolean true if filter is read otherwise false
            $filter_props['filter'] = $filter === 'read';
        }

        return $filter_props;
    }

    private function is_admin()
    {
        return Auth::user()->hasRole('Admin');
    }

    private function is_donor()
    {
        return Auth::user()->hasRole('Donor');
    }

    private function is_recipient()
    {
        return Auth::user()->hasRole('Recipient');
    }

    /**
     * @param Request $request
     * @return Message[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function get_admin_messages(Request $request)
    {
        if (!empty($request->filter)) {

            //gets column name based on the query string value and filter as well.
            $filter_props = $this->filter($request->filter);

            //load all the sent and received messages with filters
            $messages = Message::where($filter_props['col_name'], $filter_props['filter'])
                ->with('sender', 'receiver')->get();

        } else {

            //load all the sent and received messages
            $messages = Message::with('sender', 'receiver')->get();
        }
        return $messages;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function get_donor_or_recipient_messages(Request $request)
    {
        //get authenticated user id
        $user_id = Auth::user()->id;

        if (!empty($request->filter)) {

            //gets column name based on the query string value and filter as well.
            $filter_props = $this->filter($request->filter);

            //load all the sent and received messages with filters
            $messages = Message::where('status', 'approved')
                ->where($filter_props['col_name'], $filter_props['filter'])
                ->where(function ($query) use ($user_id) {
                    $query->where('receiver_id', $user_id);
                    $query->orWhere('sender_id', $user_id);
                })
                ->with('sender', 'receiver')->get();

        } else {

            //load all the messages which belongs to currently authenticated users
            //which are approved by Admin
            //By using user_id for 'receiver_id' and 'sender_id' will
            //load all the messages sent and received by a particular user
            $messages = Message::where(function ($query) use ($user_id) {
                $query->where('receiver_id', $user_id);
                $query->orWhere('sender_id', $user_id);
            })->where('status', 'approved')
                ->with('sender', 'receiver')->orderBy('id', 'asc');
        }
        return $messages;
    }
}
