<?php

namespace App\Models\Frontend\Donor;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class S3CancerAb extends Model
{
    protected $table = 'dn_s3_cancer_ab';
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];

    public static function getTableColumns($table)
    {
        return Schema::getColumnListing($table);
    }

    public static function store($request, $medical_abnormality)
    {
        $columns_list = self::getTableColumns('dn_s3_cancer_ab');

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

        $medical_abnormality
            ->cancerAb()
            ->updateOrCreate([
                'medical_abnormality_id' => $medical_abnormality->id
            ], $data);
    }

    public function cancerAb()
    {
        return $this->belongsTo(MedicalAbnormality::class);
    }
}
