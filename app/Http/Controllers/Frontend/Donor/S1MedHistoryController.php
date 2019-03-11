<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\S1Question;
use Exception;
use Illuminate\Http\Request;

class S1MedHistoryController extends Controller
{
    public function store(Request $request)
    {

        try {
            $request->only(['user_id', 'vaccinated', 'vaccinated_for']);

            S1Question::create($request->all());

            return response()->json(['error' => false, 'message' => 'Medical History Information saved.']);

        } catch (Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
