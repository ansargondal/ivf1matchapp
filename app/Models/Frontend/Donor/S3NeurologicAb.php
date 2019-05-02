<?php

namespace App\Models\Frontend\Donor;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class S3NeurologicAb extends Model
{
    protected $table = 'dn_s3_neurologic_ab';
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];

    public static function getTableColumns($table)
    {
        return Schema::getColumnListing($table);
    }

    public function neurologicAb()
    {
        return $this->belongsTo(MedicalAbnormality::class);
    }

    public static function store($request, $medical_abnormality)
    {
        $columns_list = self::getTableColumns('dn_s3_neurologic_ab');

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

        $medical_abnormality->neurologicAb()->create($data);
    }
}
