<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\MedicalAbnormality;
use App\Models\Frontend\Donor\S3CancerAb;
use App\Models\Frontend\Donor\S3ChromosomalAb;
use App\Models\Frontend\Donor\S3GeneticAb;
use App\Models\Frontend\Donor\S3NeurologicAb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class S3MedAbnormalityController extends Controller
{
    public function store(Request $request)
    {
        try {

            $columns_list = MedicalAbnormality::getTableColumns('dn_medical_abnormality');
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

            //Medical Abnormality Data Insertion
            $medical_abnormality = Auth::user()->medicalAbnormality()->updateOrCreate(['user_id' => 44], $data);


            //Chromosomal Abnormality Data Insertion
            S3ChromosomalAb::store($request, $medical_abnormality);

            //Genetic Abnormality data Insertion
            S3GeneticAb::store($request, $medical_abnormality);

            //Cancer Abnormality data Insertion
            S3CancerAb::store($request, $medical_abnormality);

            //Neurological Abnormality data Insertion
            S3NeurologicAb::store($request, $medical_abnormality);

            return response()->json(['error' => false, 'message' => 'Medical Abnormality Information saved.']);

        } catch (\Exception $exception) {

            return response()->json(['error' => true, 'message' => 'something went wrong! Try again!']);
        }
    }
}
