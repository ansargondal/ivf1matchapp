<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function store(Request $request)
    {
        try {

            $education = $request->except('token');

            Auth::user()->education()->updateOrCreate(['user_id' => 44], $education);

            return response()->json(['error' => false, 'message' => 'Education Information saved.']);

        } catch (\Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);

        }
    }
}
