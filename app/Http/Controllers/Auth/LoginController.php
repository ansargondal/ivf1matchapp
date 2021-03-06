<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Models\Frontend\Donor\DQProgress;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $url = '/admin';

    public function show()
    {
        return view('frontend.login');
    }

    public function authenticate(UserLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            //if user is admin, then login without checking active status
            if ($this->isAdmin()) {

                return response()->json(['error' => false, 'message' => 'Logged In Successfully!', 'url' => $this->url]);
            }


            //user is donor and Donor Questionnaire form is not completed
            if ($this->isDonor() && !$this->isDQFormCompleted()) {

                $this->url = DQProgress::getLastDQSavedStepURL();

                //if url is null then redirect to questionnaire step form
                $this->url = $this->url ?? '/donor/questionnaire';

                return response()->json(['error' => false, 'message' => 'Logged In Successfully!', 'url' => $this->url]);
            }

            //check active status for donors/recipients
            if ($this->isActiveUser()) {

                //redirect donor/recipients to messages page after login
                $this->url .= '/messages';

                return response()->json(['error' => false, 'message' => 'Logged In Successfully!', 'url' => $this->url]);
            }

            //logout if they are not active
            Auth::logout();

            return response()->json(['error' => true, 'message' => 'Your profile is not active yet.']);
        }

        return response()->json(['error' => true, 'message' => 'Your credentials are incorrect.']);
    }

    //check if user logged in  user is active in the database
    private function isActiveUser(): bool
    {
        $userStatus = strtolower(Auth::user()->status);

        return !($userStatus === 'new' || $userStatus === 'inactive');
    }

    public function logout()
    {
        Auth::logout();

        return redirect(route('frontend.index'));
    }

    //logged in users role is admin
    private function isAdmin()
    {
        return Auth::user()->hasRole('Admin');
    }

    private function isDonor()
    {
        return Auth::user()->hasRole('Donor');
    }

    private function isDQFormCompleted()
    {
        //TODO: Implement the Form completed Logic
        return false;
    }
}
