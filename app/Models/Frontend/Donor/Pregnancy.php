<?php

namespace App\Models\Frontend\Donor;


use App\Models\Backend\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Pregnancy extends Model
{

    protected $table = 'dn_pregnancy';
    public $timestamps = false;

    protected $guarded = [];

    public static function getTableColumns($table)
    {
        return Schema::getColumnListing($table);
    }

    public static function store($request)
    {
        $column_list = self::getTableColumns('dn_pregnancy');
        //get all pregnancy history data except sexual activity
        $data = $request->only($column_list);

        return self::create($data);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sexualActivity()
    {
        return $this->hasOne(PhSexualActivity::class);
    }

    public function allergy()
    {
        return $this->hasOne(S2Allergy::class);
    }

    public function illness()
    {
        return $this->hasOne(S2Illness::class);
    }

    public function medication()
    {
        return $this->hasOne(S2Medication::class);
    }

    public function suppliment()
    {
        return $this->hasOne(suppliment::class);
    }

    public function surgical()
    {
        return $this->hasOne(S2Surgical::class);
    }

}
