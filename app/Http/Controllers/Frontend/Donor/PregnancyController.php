<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\PhSexualActivity;
use App\Models\Frontend\Donor\Pregnancy;
use Exception;
use Illuminate\Http\Request;

class PregnancyController extends Controller
{
    public function store(Request $request)
    {
        try {

            //Save Pregnancy History data
            $pregnancy = Pregnancy::store($request);

            //saving sexual activity data
            PhSexualActivity::store($request, $pregnancy);

            return response()->json(['error' => false, 'message' => 'Pregnancy Information saved.']);
        } catch (Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
