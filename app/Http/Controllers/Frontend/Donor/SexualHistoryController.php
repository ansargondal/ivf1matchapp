<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\DQProgress;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SexualHistoryController extends Controller
{
    protected  $data;

    public function store(Request $request)
    {
        try {

            $this->data = $request->except(['_token', 'current_step']);

            $request->user()
                ->sexualHistory()
                ->updateOrCreate(['user_id' => 44], $this->data);

            //updates or creates the current progress of donor questionnaire
            (new DQProgress)->updateOrCreate($request);

            return response()
                ->json(['error' => false, 'message' => 'Sexual History Information saved.']);

        } catch (Exception $exception) {

            Log::error($exception->getMessage());
            return response()
                ->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
