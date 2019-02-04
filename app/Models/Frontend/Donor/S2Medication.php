<?php

namespace App\Models\Frontend\Donor;

use Illuminate\Database\Eloquent\Model;

class S2Medication extends Model
{
    protected $table = 'dn_s2_medication_list';
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];

    public function medicalHistory()
    {
        return $this->belongsTo(MedicalHistory::class);
    }

    public static function store($request, $medical_history)
    {
        //get only Medical History Medication list data
        $medication_list = $request->only(['prescription', 'how_often', 'reason']);


        //count medical history medication data
        $count = count($medication_list['prescription']);

        for ($i = 0; $i < $count; $i++) {

            $medication_list_row = [];

            //get a row one by one of medication data
            foreach ($medication_list as $key => $medication) {
                $medication_list_row[$key] = $medication[$i];
            }

            //save one row at a time till the loop completes
            $medical_history->medicationList()->create($medication_list_row);
        }

    }
}
