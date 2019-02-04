<?php

namespace App\Models\Frontend\Donor;

use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class MedicalProblem extends Model
{
    protected $table = 'dn_medical_problems';
    public $timestamps = false;

    protected $guarded = [];

    public static function getTableColumns($table)
    {
        return Schema::getColumnListing($table);
    }

    public static function store($request)
    {
        $columns_list = self::getTableColumns('dn_medical_problems');

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

        self::create($data);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
