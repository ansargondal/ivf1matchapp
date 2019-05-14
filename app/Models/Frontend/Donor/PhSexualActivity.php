<?php

namespace App\Models\Frontend\Donor;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
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

    public static function store(Request $request, $pregnancy)
    {
        $column_list = self::getTableColumns('dn_ph_sexual_activity');

        //get only sexual activity data
        $data = $request->only($column_list);

        //if there is any data for sexual activity (checking by it's first column)
        if (isset($data['delivered_baby'])) {

            //count sexual activity items
            $count = count($data['delivered_baby']);

            $sexual_activity_id = 1;

            for ($i = 0; $i < $count; $i++) {

                $sexual_activity_row = [];

                //get a row one by one of sexual activity data
                foreach ($data as $key => $activity) {

                    $sexual_activity_row[$key] = $activity[$i];

                }

                //save one row at a time till the loop completes
                $pregnancy->sexualActivity()->updateOrCreate(['id' => $sexual_activity_id, 'pregnancy_id' => $pregnancy->id], $sexual_activity_row);

                $sexual_activity_id++;
            }
        }
    }


    public function pregnancy()
    {
        return $this->belongsTo(Pregnancy::class);
    }
}
