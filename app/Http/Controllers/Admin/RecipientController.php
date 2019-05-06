<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\Backend\User;
use Illuminate\Http\Request;

class RecipientController extends Controller
{
    public function __construct()
    {
//        $this->middleware('App\Http\Middleware\CheckRole:Admin');
    }

    public function index()
    {
        $recipients = User::whereHas('roles', function ($query) {
            $query->where('name', 'Recipient');
        })->limit(4)->get();

        return view('admin.recipients', compact('recipients'));
    }

    public function create()
    {
        return view('frontend.recipient-signup');
    }

    public function edit($id)
    {
        return User::find($id);
    }

    public function update(Request $request)
    {
        $pathInfo = request()->getPathInfo();

        $id = explode("/", $pathInfo)[3];

        $recipient = user::find($id);

        $recipient->fname = $request->fname;
        $recipient->lname = $request->lname;
        $recipient->status = $request->status;
        $recipient->save();

        return response()->json(['error' => false, 'message' => 'Recipient updated successfully!']);
    }

    public function store(RegisterUserRequest $request)
    {
        $data = $request->only(['fname', 'lname', 'email', 'password']);

        $user = User::create($data);

        //assign user role of recipient
        $user->assignRole('Recipient');

        //recipient has three status (New, Active, Inactive)

        return response()->json(['error' => false,
            'message' => 'We have received your recipient application. You will receive an email when your account has been activated.']);
    }

    public function updateStatus(Request $request)
    {
        $pathInfo = request()->getPathInfo();

        $id = explode("/", $pathInfo)[3];

        $recipient = user::find($id);

        $recipient->status = $request->status;

        $recipient->save();

        return response()->json(['error' => false,
            'message' => 'Recipient status has been changed to' . $request->status . '!']);

    }

    public function destroy($id)
    {
        try {
            User::whereHas('roles', function ($query) {
                $query->where('name', 'Recipient');
            })->whereId($id)->delete();

            return response()->json(['error' => false, 'message' => 'Recipient deleted successfully!']);

        } catch (\Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }

    public function recipientsDTData()
    {
        $recipients = User::whereHas('roles', function ($query) {
            $query->where('name', 'Recipient');
        })->get();


        return datatables($recipients)
            ->addColumn('status', function ($recipients) {

                $btnClass = $this->getMatchedClass($recipients->status);

                return '<div class="dropdown">
                            <button data-url="' . route('admin.recipient.status', $recipients->id) . '" class="btn '
                    . $btnClass . ' dropdown-toggle border-0 py-0 px-2 font-weight-light" style="font-size: 1em;"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ' . ucfirst($recipients->status) . '
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">New</a>
                            <a class="dropdown-item" href="#">Active</a>
                            <a class="dropdown-item" href="#">Inactive</a>
                        </div>
                       </div>';
            })
            ->addColumn('action', function ($donors) {

                return '<a href="' . route('admin.recipients.update', $donors->id) . '" class="action js-btn-edit" data-toggle="tooltip" 
                            data-placement="top" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                               
                            <a href="' . route('admin.recipients.destroy', $donors->id) . '" class="action js-btn-delete" 
                            data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a>';

            })->rawColumns(['status', 'action'])->make(true);
    }

    public function getMatchedClass($status)
    {
        switch (strtolower($status)) {
            case 'new':
                return 'btn-danger';
                break;
            case 'active':
                return 'btn-success';
            case 'inactive':
                return 'btn-warning';
                break;
            default:
                break;
        }
    }
}
