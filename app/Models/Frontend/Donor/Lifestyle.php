<?php

namespace App\Models\Frontend\Donor;

use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Lifestyle extends Model
{
    protected $table = 'dn_lifestyle';
    public $timestamps = false;
    protected $guarded = [];

    public static function getTableColumns($table)
    {
        return Schema::getColumnListing($table);
    }

    public static function store(\Illuminate\Http\Request $request)
    {
        $column_list = self::getTableColumns('dn_lifestyle');

        //get all pregnancy history data except sexual activity
        $data = $request->only($column_list);

        return self::create($data);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sterile()
    {
        return $this->hasOne(LifeStyleSterile::class);
    }
}
