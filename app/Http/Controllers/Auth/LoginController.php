<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('frontend.login');
    }

    public function authenticate(UserLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return response()->json(['error' => false, 'message' => 'Logged In Successfully!']);
        }

        return response()->json(['error' => true, 'message' => 'Your credentials are incorrect.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('frontend.index'));
    }
}
