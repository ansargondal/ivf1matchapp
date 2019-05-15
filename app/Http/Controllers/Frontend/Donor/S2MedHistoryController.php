<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\DQProgress;
use App\Models\Frontend\Donor\S2Allergy;
use App\Models\Frontend\Donor\S2Illness;
use App\Models\Frontend\Donor\S2Medication;
use App\Models\Frontend\Donor\S2Suppliment;
use App\Models\Frontend\Donor\S2Surgical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class S2MedHistoryController extends Controller
{

    public function store(Request $request)
    {
        try {
            //get only vaccinated data for medical history table
            $vaccinated_data = $request->only(['user_id', 'vaccinated', 'vaccinated_for']);

            //transform vaccinated data 'yes' => 1 and 'no' => 0
            $vaccinated = strtolower($request->get('vaccinated'));

            $vaccinated_data['vaccinated'] = ($vaccinated === 'yes') ? 1 : 0;

            //save medical history data and return last inserted medical history row
            $medical_history = $request->user()
                ->s2MedicalHistory()
                ->updateOrCreate(['user_id' => 44], $vaccinated_data);

            //Medical History Illness data Insertion
            S2Illness::store($request, $medical_history);

            //Medical History Surgical Procedure List data Insertion
            S2Surgical::store($request, $medical_history);

            //Medical History  Medication  data Insertion
            S2Medication::store($request, $medical_history);

            //Medical History  Supplement data Insertion
            S2Suppliment::store($request, $medical_history);

            //Medical History  Allergy List data Insertion
            S2Allergy::store($request, $medical_history);


            //updates or creates the current progress of donor questionnaire
            (new DQProgress)->updateOrCreate($request);

            return response()->json(['error' => false, 'message' => 'Medical History Information saved.']);

        } catch (\Exception $exception) {

            Log::error($exception->getMessage());

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
