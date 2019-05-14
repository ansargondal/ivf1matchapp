<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\Lifestyle;
use App\Models\Frontend\Donor\LifeStyleSterile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LifestyleController extends Controller
{
    public function store(Request $request)
    {
        try {

            $column_list = Lifestyle::getTableColumns('dn_lifestyle');

            //get all pregnancy history data except sexual activity
            $data = $request->only($column_list);

            //Save lifestyle Info
            $lifestyle = Auth::user()->lifestyle()->updateOrCreate(['user_id' => 44], $data);

            //save lifestyle sterile information
            LifeStyleSterile::store($request, $lifestyle);

            return response()->json(['error' => false, 'message' => 'Lifestyle information saved.']);

        } catch (\Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}

