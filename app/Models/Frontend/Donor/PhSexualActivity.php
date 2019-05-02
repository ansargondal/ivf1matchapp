<?php

namespace App\Models\Frontend\Donor;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class PhSexualActivity extends Model
{
    protected $table = 'dn_ph_sexual_activity';

    public $timestamps = false;

    protected $guarded = [];

    public static function getTableColumns($table)
    {
        return Schema::getColumnListing($table);
    }

    public static function store(\Illuminate\Http\Request $request, $pregnancy)
    {
        $column_list = self::getTableColumns('dn_ph_sexual_activity');

        //get only sexual activity data
        $data = $request->only($column_list);

        //if there is any data for sexual activity (checking by it's first column)
        if (isset($data['delivered_baby'])) {

            //count sexual activity items
            $count = count($data['delivered_baby']);

            for ($i = 0; $i < $count; $i++) {

                $sexual_activity_row = [];

                //get a row one by one of sexual activity data
                foreach ($data as $key => $activity) {
                    $sexual_activity_row[$key] = $activity[$i];
                }

                //save one row at a time till the loop completes
                $pregnancy->sexualActivity()->create($sexual_activity_row);
            }
        }
    }


    public function pregnancy()
    {
        return $this->belongsTo(Pregnancy::class);
    }
}
