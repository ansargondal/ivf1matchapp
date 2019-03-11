<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{

    public function store(Request $request)
    {

        try {

            $contactInfo = $request->except('_token');

            Auth::user()->contact()->create($contactInfo);

            return response()->json(['error' => false, 'message' => 'Contact Information saved.']);

        } catch (\Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
