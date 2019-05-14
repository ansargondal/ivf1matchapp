<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SexualHistoryController extends Controller
{
    public function store(Request $request)
    {
        try {

            Auth::user()->sexualHistory()->updateOrCreate(['user_id' => 44], $request->all());

            return response()->json(['error' => false, 'message' => 'Sexual History Information saved.']);

        } catch (Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
