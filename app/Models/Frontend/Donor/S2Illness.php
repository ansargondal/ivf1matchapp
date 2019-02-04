<?php

namespace App\Models\Frontend\Donor;

use Illuminate\Database\Eloquent\Model;

class S2Illness extends Model
{
    protected $table = 'dn_s2_illness_list';
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];

    public function medicalHistory()
    {
        return $this->belongsTo(MedicalHistory::class);
    }

    public static function store($request, $medical_history)
    {
//        if ($request->ajax()) {

        //get only medical history illness data
        $medical_illness = $request->only(['problem', 'age', 'comment']);

        //count medical history illness data
        $count = count($medical_illness['problem']);

        for ($i = 0; $i < $count; $i++) {

            $medical_illness_row = [];

            //get a row one by one of sexual activity data
            foreach ($medical_illness as $key => $illness) {
                $medical_illness_row[$key] = $illness[$i];
            }

            //save one row at a time till the loop completes
            $medical_history->medicalIllness()->create($medical_illness_row);
        }

        return true;
//        }
//        return false;
    }
}
