<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\DQProgress;
use App\Models\Frontend\Donor\MedicalProblem;
use Illuminate\Http\Request;

class S4MedProblemController extends Controller
{
    public function store(Request $request)
    {
        try {

            $columns_list = MedicalProblem::getTableColumns('dn_medical_problems');

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

            $request->user()
                ->medicalProblem()
                ->updateOrCreate(['user_id' => 44], $data);

            //updates or creates the current progress of donor questionnaire
            (new DQProgress)->updateOrCreate($request);


            return response()->json(['error' => false, 'message' => 'Medical Problems Information saved.']);

        } catch (\Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
