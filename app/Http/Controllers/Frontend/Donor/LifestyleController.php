<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\Lifestyle;
use App\Models\Frontend\Donor\LifeStyleSterile;
use Illuminate\Http\Request;

class LifestyleController extends Controller
{
    public function store(Request $request)
    {
        try {
            //Save lifestyle Info
            $lifestyle = Lifestyle::store($request);

            //save lifestyle sterile information
            LifeStyleSterile::store($request, $lifestyle);

            return response()->json(['error' => false, 'message' => 'Lifestyle information saved.']);
        } catch (\Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}

