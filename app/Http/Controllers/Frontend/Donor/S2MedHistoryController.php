<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\MedicalHistory;
use App\Models\Frontend\Donor\S2Allergy;
use App\Models\Frontend\Donor\S2Illness;
use App\Models\Frontend\Donor\S2Medication;
use App\Models\Frontend\Donor\S2Suppliment;
use App\Models\Frontend\Donor\S2Surgical;
use Illuminate\Http\Request;

class S2MedHistoryController extends Controller
{

    public function store(Request $request)
    {
        try {
            //Medical History data Insertion
            $medical_history = MedicalHistory::store($request);

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

            return response()->json(['error' => false, 'message' => 'Medical History Information saved.']);

        } catch (\Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
