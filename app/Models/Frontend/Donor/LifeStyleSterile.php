<?php

namespace App\Models\Frontend\Donor;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class LifeStyleSterile extends Model
{
    protected $table = 'dn_lifestyle_sterile';
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];

    public static function getTableColumns($table)
    {
        return Schema::getColumnListing($table);
    }

    public static function store(\Illuminate\Http\Request $request, $lifestyle)
    {
        $column_list = self::getTableColumns('dn_lifestyle_sterile');

        //get only lifestyle sterile values
        $data = $request->only($column_list);


        //if there is any data for sterile used  checkbox (checking by it's first column)
        if (isset($data['sterile_used'])) {

            //count sterile used items
            $count = count($data['sterile_used']);

            for ($i = 0; $i < $count; $i++) {

                $sterile_row = [];

                //get a row one by one of sexual activity data
                foreach ($data as $key => $activity) {
                    $sterile_row[$key] = $activity[$i];
                }

                //save one row at a time till the loop completes
                $lifestyle->sterile()->create($sterile_row);
            }
        }
    }


    public function lifestyle()
    {
        return $this->belongsTo(Lifestyle::class);
    }


}
