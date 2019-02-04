<?php

namespace App\Http\Controllers\Frontend\Donor;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Donor\MedicalAbnormality;
use App\Models\Frontend\Donor\S3CancerAb;
use App\Models\Frontend\Donor\S3ChromosomalAb;
use App\Models\Frontend\Donor\S3GeneticAb;
use App\Models\Frontend\Donor\S3NeurologicAb;
use Illuminate\Http\Request;

class S3MedAbnormalityController extends Controller
{
    public function store(Request $request)
    {
        try {
            //Medical Abnormality Data Insertion
            $medical_abnormality = MedicalAbnormality::store($request);

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
