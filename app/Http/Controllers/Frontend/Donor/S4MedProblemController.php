<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\MedicalProblem;
use Illuminate\Http\Request;

class S4MedProblemController extends Controller
{
    public function store(Request $request)
    {
        try {
            MedicalProblem::store($request);
            return response()->json(['error' => false, 'message' => 'Medical Problems Information saved.']);

        } catch (\Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
