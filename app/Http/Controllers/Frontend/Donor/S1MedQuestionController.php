<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\DQProgress;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class S1MedQuestionController extends Controller
{
    //
    public function store(Request $request)
    {
        try {

            $questions = $request->except(['token', 'current_step']);

            $request
                ->user()
                ->s1Question()
                ->updateOrCreate(['user_id' => 44], $questions);


            //updates or creates the current progress of donor questionnaire
            (new DQProgress)->updateOrCreate($request);


            return response()->json(['error' => false, 'message' => 'Medical History Information saved.']);

        } catch (Exception $exception) {

            Log::error($exception->getMessage());

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
