<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Backend\User;
use App\Models\Frontend\Donor\DonorProfile;
use App\Models\Frontend\Donor\DQProgress;
use App\Models\Frontend\Donor\Image;
use Illuminate\Http\Request;

class DonorProfileController extends Controller
{
    public function index()
    {
        $donors = User::with([

            'profile' => function ($query) {

                return $query->select('id', 'user_id', 'age', 'eye_color');

            }, 'images'])->has('profile')->paginate(3);


        return view('frontend.donor-profiles', compact('donors'));
    }

    public function availableDonors()
    {
        $donors = User::whereHas('profile')
            ->with('profile:id,user_id,age,eye_color')->limit(3)->get();

        return view('frontend.index', compact('donors'));
    }

    public function show($id)
    {
        $donor = User::with(['profile', 'contact:id,user_id,state'])->find($id);

        return view('frontend.donor-details', compact('donor'));
    }

    public function filter(Request $request)
    {
        $opts = [];
        $opts['race'] = $request->only('race')['race'] ?? [];
        $opts['hair_color'] = $request->only('hair')['hair'] ?? [];
        $opts['eye_color'] = $request->only('eye')['eye'] ?? [];
        $is_local = $request->only('is_local')['is_local'];

        //Illinois is the local state in which Ivf1match is located
        $local_state = ($is_local === 'true') ? 'illinois' : '';

        return User::with('profile:id,user_id,age,eye_color')
            ->whereHas('profile', function ($query) use ($opts) {

                foreach ($opts as $key => $opt) {
                    if (!empty($opt)) $query->whereIn($key, $opt);
                }

            })->with('contact:id,user_id,state')
            ->whereHas('contact', function ($query) use ($local_state) {

                if ($local_state === 'illinois') $query->where('state', $local_state);

            })->with('images')->paginate(3);
    }


    public function store(Request $request)
    {
        try {

            $columns_list = DonorProfile::getTableColumns('dn_profile');

            $data = $request->only($columns_list);

            foreach ($data as $key => $value) {

                //transform vaccinated data 'yes' => 1 and 'no' => 0
                $temp = strtolower($request->get($key));

                if ($temp === 'yes') {

                    $data[$key] = 1;

                } elseif ($temp === 'no') {

                    $data[$key] = 0;

                }
            }

            //save donor profile information
            $donor_profile = $request->user()
                ->profile()
                ->updateOrCreate(['user_id' => 44], $data);

            //save images and move them to specific directory
            Image::store($request, $donor_profile);

            //updates or creates the current progress of donor questionnaire
            (new DQProgress)->updateOrCreate($request);

            return response()->json(['error' => false, 'message' => 'Donor Profile Information saved.']);

        } catch (\Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }


}
