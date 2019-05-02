<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\Backend\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class DonorController extends Controller
{
    public function __construct()
    {
        $this->middleware('App\Http\Middleware\CheckRole:Admin|Recipient')
            ->only(['index']);
    }

    public function index()
    {

        $donors = Role::with('users')->where('name', '=', 'Donor')->get();

//        return Auth::user()->with('roles')->get();

        return view('admin.donors', $donors);
    }

    public function create()
    {
        return view('frontend.donor-signup');
    }

    public function updateStatus(Request $request)
    {
        $pathInfo = request()->getPathInfo();

        $id = explode("/", $pathInfo)[3];

        $donor = user::find($id);

        $donor->status = $request->status;

        $donor->save();

        return response()->json(['error' => false,
            'message' => 'Donor status has been changed to' . $request->status . '!']);

    }

    public function updateCycle(Request $request)
    {
        $pathInfo = request()->getPathInfo();

        $id = explode("/", $pathInfo)[3];

        $donor = user::find($id);

        $donor->cycle = $request->status;

        $donor->save();

        return response()->json(['error' => false,
            'message' => 'Donor status has been changed to' . $request->cycle . '!']);

    }

    public function store(RegisterUserRequest $request)
    {
        $data = $request->all();

        $age = $request->input('quiz_age');

        //if age is null return error  message
        if (empty($age)) return response()->json(['error' => true, 'message' => 'Please take the quiz by Refreshing page! Before we signed you up!']);


        $data['code'] = $this->makeCode($request);

        $user = User::create($data);

        /**get the quiz age form users
         * Rest of the options are true by anyway so no need to save them **/
        $age = $request->input('quiz_age');

        //store the user quiz age in the Quizzes Table
        $user->quiz()->create(['age' => $age]);

        //assign user role of recipient
        $user->assignRole('Donor');

        //login donor after successfully creation
        Auth::login($user);

        return response()->json(['error' => false, 'message' => 'Please fill the donor questionnaire, to complete sign up process']);
    }

    /**
     * @desc adds fname & lname initials and adds random number to them
     * @param $request
     * @return code
     */
    protected function makeCode($request)
    {
        $fname_intial = $request->input('fname')[0];
        $lname_initial = $request->input('lname')[0];

        $code = $fname_intial . $lname_initial . rand(1000, 10000);

        return $code;
    }

    public function donorsDTData()
    {
        $donors = User::whereHas('roles', function ($query) {
            $query->where('name', 'Donor');
        })->with('profile')->get();

        return datatables($donors)
            ->addColumn('cycle', function ($donors) {

                $btnClass = $this->getMatchedClass($donors->cycle);

                return '<div class="dropdown" >
                        <button  class="cycle btn ' . $btnClass . ' dropdown-toggle border-0 py-0 px-2 font-weight-light" style="font-size: 1em; "
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                data-url="' . route('admin.donor.cycle', $donors->id) . '">
                                ' . $donors->cycle . '
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">New</a>
                            <a class="dropdown-item" href="#">Available</a>
                            <a class="dropdown-item" href="#">Matched</a>
                            <a class="dropdown-item" href="#">In Cycle</a>
                            <a class="dropdown-item" href="#">Just Completed Cycle</a>
                            <a class="dropdown-item" href="#">Inactive</a>
                        </div>
                       </div>';

            })->addColumn('status', function ($donors) {

                $btnClass = $this->getMatchedClass($donors->status);

                return '<div class="dropdown">
                        <button data-url="' . route('admin.donor.status', $donors->id) . '" 
                        class="btn ' . $btnClass . ' dropdown-toggle border-0 py-0 px-2 font-weight-light" style="font-size: 1em;"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ' . ucfirst($donors->status) . '
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">New</a>
                            <a class="dropdown-item" href="#">Active</a>
                            <a class="dropdown-item" href="#">Inactive</a>
                            <a class="dropdown-item" href="#">Rejected</a>
                        </div>
                       </div>';

            })->addColumn('action', function ($donors) {
                return '<a href="' . route('admin.donors.show', $donors->id) . '" class="action js-btn-user-eye" data-toggle="tooltip"
                               data-placement="top" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                               
                            <a href="' . route('admin.donors.edit', $donors->id) . '" class="action" data-toggle="tooltip" data-placement="top"
                               title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                               
                            <a href="' . route('admin.donors.destroy', $donors->id) . '" class="action js-btn-delete" data-toggle="tooltip" data-placement="top"
                               title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a>';
            })
            ->rawColumns(['cycle', 'status', 'action'])->make(true);
    }

    public function getMatchedClass($value)
    {
        switch (strtolower($value)) {
            case 'new':
                return 'btn-danger';
                break;
            case 'available':
            case 'active':
            case 'matched':
                return 'btn-success';
                break;
            case 'in cycle':
                return 'btn-info';
                break;
            case 'just completed cycle':
                return 'btn-secondary';
                break;
            case 'inactive':
                return 'btn-warning';
                break;
            default:
                break;
        }
    }

}
