<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class S1MedQuestionController extends Controller
{
    //
    public function store(Request $request)
    {
        try {

            $questions = $request->except('token');

            Auth::user()->s1Question()->updateOrCreate(['user_id' => 44], $questions);

            return response()->json(['error' => false, 'message' => 'Medical History Information saved.']);

        } catch (Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
