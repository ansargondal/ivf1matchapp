<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\DQProgress;
use App\Models\Frontend\Donor\PhSexualActivity;
use App\Models\Frontend\Donor\Pregnancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PregnancyController extends Controller
{
    public function store(Request $request)
    {
        try {

            $column_list = Pregnancy::getTableColumns('dn_pregnancy');

            //get all pregnancy history data except sexual activity
            $data = $request->only($column_list);

            //Save Pregnancy History data
            $pregnancy = Auth::user()->pregnancy()->updateOrCreate(['user_id' => 44], $data);


            //saving sexual activity data
            PhSexualActivity::store($request, $pregnancy);

            //updates or creates the current progress of donor questionnaire
            (new DQProgress)->updateOrCreate($request);

            return response()
                ->json(['error' => false, 'message' => 'Pregnancy Information saved.']);

        } catch (\Exception $exception) {

            Log::error($exception->getMessage());

            return response()
                ->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
