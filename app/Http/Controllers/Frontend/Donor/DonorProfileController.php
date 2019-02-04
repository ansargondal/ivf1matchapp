<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\DonorProfile;
use App\Models\Frontend\Donor\Image;
use Illuminate\Http\Request;

class DonorProfileController extends Controller
{

    public function store(Request $request)
    {
//        try {

        //save donor profile information
        $donor_profile = DonorProfile::store($request);

        //save images and move them to specific directory
        Image::store($request, $donor_profile);

        return response()->json(['error' => false, 'message' => 'Donor Profile Information saved.']);

//        } catch (\Exception $exception) {
//
//            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
//        }
    }


    public function index()
    {
        $profiles = DonorProfile::with('images')->paginate(4);

        return view('frontend.donor-profiles', compact('profiles'));
    }

    public function filter(Request $request)
    {
        $opts = [];
        $opts['race'] = $request->only('race')['race'] ?? [];
        $opts['hair_color'] = $request->only('hair')['hair'] ?? [];
        $opts['eye_color'] = $request->only('eye')['eye'] ?? [];


        return DonorProfile::where(function ($query) use ($opts) {
            foreach ($opts as $key => $opt) {
                if (!empty($opt)) $query->whereIn($key, $opt);
            }
        })->get();
    }

    public function show($id)
    {
        $profile = DonorProfile::with('images')->find($id);

        return view('frontend.donor-details', compact('profile'));
    }
}
