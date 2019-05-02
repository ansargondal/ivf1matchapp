<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Backend\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('App\Http\Middleware\CheckRole:Admin')
            ->except(['passwordEdit', 'passwordUpdate', 'edit', 'update', 'profile']);
    }

    public function index()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->whereIn('name', ['admin', 'manager', 'employee']);
        })->limit(4)->get();

        return view('admin.users', compact('users'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('admin.user-profile', compact('user'));
    }

    public function passwordEdit()
    {
        return view('admin.change-password');
    }

    public function passwordUpdate(Request $request)
    {
        $user = Auth::user();
        $old_hash = $user->getAuthPassword();
        $old_password = $request->old_password;

        if (password_verify($old_password, $old_hash)) {

            $new_password = Hash::make($request->new_password);

            $user->password = $new_password;

            $user->save();

            return 'password updated!';
        }
        return 'password mismatch';
    }

    public function edit($id)
    {
        return User::whereHas('roles', function ($query) {
        })->with('roles')->whereId($id)->get();
    }

    public function update(Request $request)
    {
        $pathInfo = request()->getPathInfo();

        $id = explode("/", $pathInfo)[3];

        $user = user::find($id);

        $user->fname = $request->fname;
        $user->lname = $request->lname;


        //Only update password if user has filled the password filed
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        //if roles are not empty then sync them.
        if (!empty($request->role)) {
            $user->syncRoles([$request->role]);
        }

        $user->save();

        return response()->json(['error' => false, 'message' => 'User updated successfully!']);

    }

    public function store(Request $request)
    {
        $data = $request->only(['fname', 'lname', 'email', 'password']);

        $user = User::create($data);

        $role = $request->role;

        //update user role of recipient
        $user->assignRole($role);

        return response()->json(['error' => false,
            'message' => "New user has been created with {$role} role"]);

    }

    public function destroy($id)
    {
        try {
            User::whereHas('roles')->whereId($id)->delete();

            return response()->json(['error' => false, 'message' => 'User has been deleted successfully!']);

        } catch (\Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }

    public function usersDTData()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->whereIn('name', ['admin', 'employee', 'manager']);
        })->with('roles')->limit(4)->get();


        return datatables($users)
            ->addColumn('actions', function ($users) {
                return '<tr> <td class="action">
                         <a href="' . route('admin.users.update', $users->id) . '" class="action js-btn-edit"
                          data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                          
                         <a href="' . route('admin.users.destroy', $users->id) . '" class="action js-btn-delete" 
                         data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-times" aria-hidden="true"></i></a>
                   </td>
               </tr>';

            })->addColumn('created_at', function ($users) {
                return $users->created_at->format('M, d Y');
            })
            ->addColumn('role', function ($users) {

                $roleClass = $this->getMatchedClass($users->roles[0]->name);

                return '<td><span class="badge ' . $roleClass . '">' . $users->roles[0]->name . '</span></td>';
            })
            ->rawColumns(['actions', 'role'])->make(true);
    }

    public function getMatchedClass($role)
    {
        switch (strtolower($role)) {
            case 'admin':
                return 'badge-danger';
                break;
            case 'employee':
                return 'badge-success';
            case 'manager':
                return 'badge-warning';
                break;
            default:
                break;
        }
    }
}
