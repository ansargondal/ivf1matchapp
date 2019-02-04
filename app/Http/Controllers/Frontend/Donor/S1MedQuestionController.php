<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Models\Frontend\Donor\S1Question;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class S1MedQuestionController extends Controller
{
    //
    public function store(Request $request)
    {
        try {
            $questions = $request->except('token');
            S1Question::create($questions);

            return response()->json(['error' => false, 'message' => 'Medical History Information saved.']);
        }catch (Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
