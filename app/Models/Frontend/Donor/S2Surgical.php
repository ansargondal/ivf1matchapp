<?php

namespace App\Models\Frontend\Donor;

use Illuminate\Database\Eloquent\Model;

class S2Surgical extends Model
{
    protected $table = 'dn_s2_surgical_list';
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];

    public function medicalHistory()
    {
        return $this->belongsTo(MedicalHistory::class);
    }

    public static function store($request, $medical_history)
    {
        //get only Medical History Surgical list data
        $surgical_list = $request->only(['surgery_type', 'surgery_date', 'complications']);


        //count medical history illness data
        $count = count($surgical_list['surgery_type']);

        for ($i = 0; $i < $count; $i++) {

            $medication_list_row = [];

            //get a row one by one of sexual activity data
            foreach ($surgical_list as $key => $surgical) {
                $surgical_list_row[$key] = $surgical[$i];
            }

            //save one row at a time till the loop completes
            $medical_history->surgicalList()->create($surgical_list_row);
        }
    }
}
