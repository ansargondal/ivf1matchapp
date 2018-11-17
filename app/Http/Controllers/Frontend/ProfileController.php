<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::with('images')->paginate(4);

        return view('frontend.donor-profiles', compact('profiles'));
    }

    public function show($id)
    {
        $profile = Profile::with('images')->find($id);

        return view('frontend.donor-details', compact('profile'));
    }
}
