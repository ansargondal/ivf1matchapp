<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\SexualHistory;
use Exception;
use Illuminate\Http\Request;

class SexualHistoryController extends Controller
{
    public function store(Request $request)
    {
        try {
            SexualHistory::create($request->all());

            return response()->json(['error' => false, 'message' => 'Sexual History Information saved.']);
        } catch (Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
