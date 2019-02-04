<?php

namespace App\Models\Frontend\Donor;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class S3ChromosomalAb extends Model
{
    protected $table = 'dn_s3_chromosomal_ab';
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];

    public static function getTableColumns($table)
    {
        return Schema::getColumnListing($table);
    }

    public static function store($request, $medical_abnormality)
    {
        $columns_list = self::getTableColumns('dn_s3_chromosomal_ab');

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

        $medical_abnormality->chromosomalAb()->create($data);
    }

    public function medicalAbnormality()
    {
        return $this->belongsTo(MedicalAbnormality::class);
    }
}
