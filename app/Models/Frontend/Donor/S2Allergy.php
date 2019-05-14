<?php

namespace App\Models\Frontend\Donor;

use Illuminate\Database\Eloquent\Model;

class S2Allergy extends Model
{
    protected $table = 'dn_s2_allergy_list';
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];


    public function medicalHistory()
    {
        return $this->belongsTo(S2Allergy::class);
    }

    public static function store($request, $medical_history)
    {
        //get only Medical History Allergy list data
        $allergy_list = $request->only(['allergy', 'reaction']);


        //count medical history allergy data
        $count = count($allergy_list['allergy']);

        $allergy_list_id = 1;

        for ($i = 0; $i < $count; $i++) {

            $allergy_list_row = [];

            //get a row one by one of medication data
            foreach ($allergy_list as $key => $allergy) {

                $allergy_list_row[$key] = $allergy[$i];

            }

            //save one row at a time till the loop completes
            $medical_history
                ->allergyList()
                ->updateOrCreate([
                    'medical_history_id' => $medical_history->id,
                    'id' => $allergy_list_id
                ],
                    $allergy_list_row);

            $allergy_list_id++;
        }
    }
}
