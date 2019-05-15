<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\DQProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    protected $contactInfo;

    public function store(Request $request)
    {
        try {

            $this->contactInfo = $request->except(['_token', 'current_step']);

            $request->user()
                ->contact()
                ->updateOrCreate(['user_id' => $request->user()->id], $this->contactInfo);

            //updates or creates the current progress of donor questionnaire
            (new DQProgress)->updateOrCreate($request);

            return response()
                ->json(['error' => false, 'message' => 'Contact Information saved.']);

        } catch (\Exception $exception) {

            Log::error($exception->getMessage());

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
