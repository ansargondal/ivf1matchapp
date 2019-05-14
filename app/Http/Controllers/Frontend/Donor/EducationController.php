<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function store(Request $request)
    {
        try {

            $education = $request->except('token');

            return response()->json(['error' => false, 'message' => 'Education Information saved.']);
        } catch (\Exception $exception) {
            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);

        }
    }
}
