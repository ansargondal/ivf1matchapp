<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\DQProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class EducationController extends Controller
{
    public function store(Request $request)
    {
        try {

            $education = $request->except(['token', 'current_step']);

            Auth::user()->education()->updateOrCreate(['user_id' => 44], $education);


            //updates or creates the current progress of donor questionnaire
            (new DQProgress)->updateOrCreate($request);
          
            return response()->json(['error' => false, 'message' => 'Education Information saved.']);

        } catch (\Exception $exception) {

            Log::error($exception->getMessage());

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);

        }
    }
}
