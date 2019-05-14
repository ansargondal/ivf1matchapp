<?php

namespace App\Models\Frontend\Donor;

use Illuminate\Database\Eloquent\Model;

class S2Suppliment extends Model
{
    protected $table = 'dn_s2_suppliment_list';
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];

    public function medicalHistory()
    {
        return $this->belongsTo(MedicalHistory::class);
    }

    public static function store($request, $medical_history)
    {
        //get only Medical History Supplement list data
        $supplement_list = $request->only(['non_prescription', 'non_how_often', 'non_reason']);


        //count medical history medication data
        $count = count($supplement_list['non_prescription']);

        $supplement_list_id = 1;


        for ($i = 0; $i < $count; $i++) {

            $supplement_list_row = [];

            //get a row one by one of medication data
            foreach ($supplement_list as $key => $supplement) {
                $supplement_list_row[$key] = $supplement[$i];
            }

            //save one row at a time till the loop completes
            $medical_history
                ->supplementList()
                ->updateOrCreate([
                    'medical_history_id' => $medical_history->id,
                    'id' => $supplement_list_id
                ], $supplement_list_row);

            $supplement_list_id++;
        }

    }
}
